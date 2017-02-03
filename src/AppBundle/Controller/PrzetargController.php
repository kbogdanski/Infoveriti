<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Przetargi;

class PrzetargController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction(Request $req) {
        $limit = 20;
        
        $rep = $this->getDoctrine()->getRepository('AppBundle:Przetargi');
        $przetargi = $rep->findBy(array(), ['dataPublikacji' => 'DESC']);
        
        $page = ($req->query->get('page')) ? intval($req->query->get('page')) : 0;
        $pagination = array_chunk($przetargi, $limit);
        $allPages = count($pagination);
        
        if ($page < 0) { 
            $page = 0;
        }
        if ($page > $allPages-1) {
            $page = $allPages-1;
        }
        
        $przetargiToDisplay = $pagination[$page];
        
        return array('przetargi' => $przetargiToDisplay, 'allPages' => $allPages, 'page' => $page) ;
    }
}
