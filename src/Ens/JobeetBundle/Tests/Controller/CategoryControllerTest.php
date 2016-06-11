<?php
// src/Ens/JobeetBundle/Tests/Controller/CategoryControllerTest.php
namespace Ens\JobeetBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends WebTestCase
{
	public function testShow()
	{
		// get the custom parameters from app config.yml
		$kernel = static::createKernel();
		$kernel->boot();
		$max_jobs_on_homepage = $kernel->getContainer()->getParameter('max_jobs_on_homepage');
		$max_jobs_on_category = $kernel->getContainer()->getParameter('max_jobs_on_category');
		
		$client = static::createClient();
		
		// categories on homepage are clickable
		$crawler = $client->request('GET', '/');
		$link = $crawler->selectLink('Programming')->link();
		$crawler = $client->click($link);
		$this->assertEquals('Ens\JobeetBundle\Controller\CategoryController::showAction', $client->getRequest()->attributes->get('_controller'));
		$this->assertEquals('programming', $client->getRequest()->attributes->get('slug'));
				
	}
}