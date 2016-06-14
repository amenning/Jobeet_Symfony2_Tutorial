<?php

namespace Ens\JobeetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

        return $this->render('job/index.html.twig', array(
            'categories' => $categories,
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
            	'id' => $job->getId(),
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
		        	
        $deleteForm = $this->createDeleteForm($job_check);

        return $this->render('job/show.html.twig', array(
            'job' => $job_check,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function previewAction(Job $job)
    {
		$em = $this->getDoctrine()->getManager();	
			
		$job_check = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($job->getToken());
		
		if (!$job_check) {
        	throw $this->createNotFoundException('That job was not found');
    	}
		        	
        $deleteForm = $this->createDeleteForm($job_check);
		$publishForm = $this->createPublishForm($job_check);

        return $this->render('job/show.html.twig', array(
            'job' => $job_check,
            'delete_form' => $deleteForm->createView(),
            'publish_form' => $publishForm->createView(),
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
    public function deleteAction(Request $request, Job $job)
    {
        $form = $this->createDeleteForm($job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $job_check = $em->getRepository('EnsJobeetBundle:Job')->findOneByToken($job->getToken());
		
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
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
