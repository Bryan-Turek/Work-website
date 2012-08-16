<?php
namespace Site\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class StaffController extends Controller
{
    /**
     * @Route("/staff")
     * @Template()
     */
    public function indexAction()
    {
		return array();
    }
	
	/**
     * @Route("/staff/{name}")
     * @Template()
     */
    public function nameAction($name)
    {
        return array('name' => $name);
    }
}
