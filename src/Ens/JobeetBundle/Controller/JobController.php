<?php

namespace Ens\JobeetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

use Ens\JobeetBundle\Entity\Job;
use Ens\JobeetBundle\Form\JobType;

/**
 * Job controller.
 *
 */
class JobController extends Controller
{
    /**
     * Lists all Job entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
		
		$categories = $em->getRepository('EnsJobeetBundle:Category')->getWithJobs();
		
		foreach($categories as $category)
		{
			$category->setActiveJobs($em->getRepository('EnsJobeetBundle:Job')->getActiveJobs($category->getId(), $this->container->getParameter('max_jobs_on_homepage')));
			$category->setMoreJobs($em->getRepository('EnsJobeetBundle:Job')->countActiveJobs($category->getId()) - $this->container->getParameter('max_jobs_on_homepage'));
		}

		$format = $this->getRequest()->getRequestFormat();

        return $this->render('job/index.'.$format.'.twig', array(
            'categories' => $categories,
            'lastUpdated' => $em->getRepository('EnsJobeetBundle:Job')->getLatestPost()->getCreatedAt()->format(DATE_ATOM),
            'feedId' => sha1($this->get('router')->generate('ens_job_index', array('_format'=> 'atom'), true)),
        ));
    }

    /**
     * Creates a new Job entity.
     *
     */
    public function newAction(Request $request)
    {
        $job = new Job();
		$job->setType('full-time');
        $form = $this->createForm('Ens\JobeetBundle\Form\JobType', $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('ens_job_preview', array(
            	'company' => $job->getCompanySlug(),
				'location' => $job->getLocationSlug(),
				'token' => $job->getToken(),
				'position' => $job->getPositionSlug()
			));
        }

        return $this->render('job/new.html.twig', array(
            'job' => $job,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction(Job $job)
    {
		$em = $this->getDoctrine()->getManager();	
			
		$job_check = $em->getRepository('EnsJobeetBundle:Job')->getActiveJob($job->getId());
		
		if (!$job_check) {
        	throw $this->createNotFoundException('That job was not found');
    	}
		
		$session = $this->getRequest()->getSession();
		
		// fetch jobs already stored in the job history
		$jobs = $session->get('job_history', array());
		
		// store the job as an array so we can put it in the session and avoid entity serialize errors
		$job = array('id' => $job_check->getId(), 'position' =>$job_check->getPosition(), 'company' =>$job_check->getCompany(), 'companyslug' =>$job_check->getCompanySlug(), 'locationslug' =>$job_check->getLocationSlug(), 'positionslug' =>$job_check->getPositionSlug());

		if (!in_array($job, $jobs)) {
			// add the current job at the beginning of the array
			array_unshift($jobs, $job);
			
			// store the new job history back into the session
			$session->set('job_history', array_slice($jobs, 0, 3));
		}
        	
        $deleteForm = $this->createDeleteForm($job_check);

        return $this->render('job/show.html.twig', array(
            'job' => $job_check,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function previewAction($token)
    {
		$em = $this->getDoctrine()->getManager();	
			
		$job_check = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($token);
		
		if (!$job_check) {
        	throw $this->createNotFoundException('That job was not found');
    	}
		        	
        $deleteForm = $this->createDeleteForm($job_check);
		$publishForm = $this->createPublishForm($job_check);
		$extendForm = $this->createExtendForm($job_check->getToken());

        return $this->render('job/show.html.twig', array(
            'job' => $job_check,
            'delete_form' => $deleteForm->createView(),
            'publish_form' => $publishForm->createView(),
            'extend_form' => $extendForm->createView(),
        ));
    }
	
	public function publishAction(Job $job)
	{
		$form = $this->createPublishForm($job);
		$request = $this->getRequest();
		
		$form->handleRequest($request);
		
		if($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$job_check = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($job->getToken());
			
			if(!$job_check) {
				throw $this->createNotFoundException('Unable to find Job entity.');
			}
			
			$job_check->publish();
			$em->persist($job_check);
			$em->flush();
			
			$this->get('session')->getFlashBag()->add('notice', 'Your job is now online for 30 days.');
		}
		
		return $this->redirect($this->generateUrl('ens_job_preview', array(
			'company' => $job_check->getCompanySlug(),
			'location' => $job_check->getLocationSlug(),
			'token' => $job_check->getToken(),
			'position' => $job_check->getPositionSlug()
		)));
	}
	
	private function createPublishForm($job)
	{
		return $this->createFormBuilder(array('token' => $job->getToken()))
			->add('token', 'hidden')
			->getForm()
		;
	}

    /**
     * Displays a form to edit an existing Job entity.
     *
     */
    public function editAction(Request $request, Job $job)
    {
        $em = $this->getDoctrine()->getManager();	
			
		$job_check = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($job->getToken());
		
		if (!$job_check) {
        	throw $this->createNotFoundException('Unable to find job entity.');
    	}	
		
		if($job_check->getIsActivated()) {
			throw $this->createNotFoundException('Job is activated and cannot be edited.');
		}
		
        $deleteForm = $this->createDeleteForm($job);
        $editForm = $this->createForm('Ens\JobeetBundle\Form\JobType', $job);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('ens_job_preview', array(
            	'company' => $job->getCompanySlug(),
				'location' => $job->getLocationSlug(),
				'token' => $job->getToken(),
				'position' => $job->getPositionSlug()
			));
        }

        return $this->render('job/edit.html.twig', array(
            'job' => $job,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Job entity.
     *
     */
    public function deleteAction($token, Request $request)
    {
        $em = $this->getDoctrine()->getManager();	
		$job = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($token);
        $form = $this->createDeleteForm($job);
        $form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $job_check = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($token);
		
			if (!$job_check) {
        		throw $this->createNotFoundException('Unable to find job entity.');
    		}	
            $em->remove($job_check);
            $em->flush();
        }

        return $this->redirectToRoute('ens_job_index');
    }

    /**
     * Creates a form to delete a Job entity.
     *
     * @param Job $job The Job entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Job $job)
    {
        return $this->createFormBuilder(array('token' => $job->getToken()))
            ->setAction($this->generateUrl('ens_job_delete', array('token' => $job->getToken())))
            ->setMethod('POST')
            ->getForm()
        ;
    }
	
	public function extendAction($token)
	{
		$form = $this->createExtendForm($token);
		$request = $this->getRequest();
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$job = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($token);
			
			if(!$job) {
				throw $this->createNotFoundException('Unable to find job entity.');
			}
			
			if(!$job->extend()) {
				throw $this->createNotFoundException('Unable to find extend the Job.');
			}
			
			$em->persist($job);
			$em->flush();
			
			$this->get('session')->getFlashBag()->add('notice', 'Your job validity has been extended until %s.', $job->getExpiresAt()->format('m/d/Y'));
		}
		
		return $this->redirect($this->generateUrl('ens_job_preview', array(
			'company'	=>	$job->getCompanySlug(),
			'location'	=>	$job->getLocationSlug(),
			'token'		=>	$job->getToken(),
			'position'	=>	$job->getPositionSlug()
		)));
	}
	
	private function createExtendForm($token)
	{
		return $this->createFormBuilder(array('token' => $token))
			->add('token', 'hidden')
			->getForm()
		;
	}
}
