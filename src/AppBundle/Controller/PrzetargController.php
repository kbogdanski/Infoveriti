<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\SimpleSearchType;

class PrzetargController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction(Request $req) {
        if ($req->getMethod() === 'GET') {
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

            $form = $this->createForm(new SimpleSearchType());
            //$form->handleRequest($req);
            return array('przetargi' => $przetargiToDisplay, 'allPages' => $allPages, 'page' => $page, 'form' => $form->createView()) ;
        }
        
        if ($req->getMethod() === 'POST') {
            $form = $this->createForm(new SimpleSearchType());
            $form->handleRequest($req);
            
            $allPages = 1;
            $page = 0;
            
            
            if ($form->isSubmitted() && $form->isValid()) {
                $dataForm = $form->getData();
                if ($dataForm['keyWord'] !== NULL && $dataForm['location'] !== NULL) {
                    $przetargiByKeyWordAndLocation = $this->getAuctiongByKeyWordAndLocation($dataForm['keyWord'], $dataForm['location']);
                    //var_dump($przetargiByKeyWordAndLocation);
                    return array('przetargi' => $przetargiByKeyWordAndLocation, 'allPages' => $allPages, 'page' => $page, 'form' => $form->createView());
                } else {
                    if ($dataForm['location'] !== NULL) {
                        $przetargiByLocation = $this->getAuctiongByLocation($dataForm['location']);
                        return array('przetargi' => $przetargiByLocation, 'allPages' => $allPages, 'page' => $page, 'form' => $form->createView());
                    }
                    if ($dataForm['keyWord'] !== NULL) {
                        $przetargiByKeyWord = $this->getAuctiongByKeyWord($dataForm['keyWord']);
                        return array('przetargi' => $przetargiByKeyWord, 'allPages' => $allPages, 'page' => $page, 'form' => $form->createView());
                    }
                }
                return $this->redirectToRoute('homepage');
            }
        }
    }
    

    /**
     * @Route("/wyszukiwarka")
     * @Template()
     */
    public function simpleSearchAction(Request $req) {
        $form = $this->createForm(new SimpleSearchType());
        $form->handleRequest($req);
        $task = $form->getData();
        
        if ($form->isSubmitted()) {
            $task = $form->getData();
            
            return array('form' => $form->createView(), 'result' => $task);
        }

        $rep = $this->getDoctrine()->getRepository('AppBundle:Przetargi');
        $result = $this->getAuctiongByLocation('warszawa');
        
        return array('form' => $form->createView(), 'result' => $result);
    }
    

    /**
     * @Route("/przetarg/{id}", requirements={"id"="\d+"})
     * @Template()
     */
    public function przetargAction (Request $req, $id) {
        $repPrzetargi = $this->getDoctrine()->getRepository('AppBundle:Przetargi');
        $przetarg = $repPrzetargi->findOneBy(array('id' => $id));
        
        $repPrzetargiExtrasShortkrs = $this->getDoctrine()->getRepository('AppBundle:PrzetargiExtrasShortkrs');
        $przetarExtrasShortkrs = $repPrzetargiExtrasShortkrs->findOneBy(array('przetargId' => $id));
        
        $form = $this->createForm(new SimpleSearchType(), array('action' => $this->generateUrl('homepage'), 'method' => 'GET'));
        $form->handleRequest($req);
        
        return array('przetarg' => $przetarg, 'przetargExtrasShortkrs' => $przetarExtrasShortkrs, 'form' => $form->createView());
    }
    
    
    
    
    /*PRIVATE FUNCTION - QUERY DQL*/
    private function getAuctiongByLocation($location) {
        $rep = $this->getDoctrine()->getRepository('AppBundle:Przetargi');    
        $result = $rep->createQueryBuilder('p')
            ->add('where', 'MATCH_AGAINST(p.miejscowosc, p.wojewodztwo, :searchterm) > 0.8')
            ->setParameter('searchterm', "$location")
            ->orderBy('p.dataPublikacji', 'DESC')
            ->getQuery()
            ->getResult();
        
        return $result;
    }
    
    private function getAuctiongByKeyWord($keyWord) {
        $repPrzetargiExtrasShortkrs = $this->getDoctrine()->getRepository('AppBundle:PrzetargiExtrasShortkrs');
        $repPrzetargi = $this->getDoctrine()->getRepository('AppBundle:Przetargi');
        $resultByKeyWord = $repPrzetargiExtrasShortkrs->createQueryBuilder('p')
            ->add('where', 'MATCH_AGAINST(p.nazwaZamowienia, p.przedmiotZam, p.rodzajZam, :searchterm) > 0.8')
            ->setParameter('searchterm', "$keyWord")
            //->orderBy('p.dataPublikacji', 'DESC')
            ->getQuery()
            ->getResult();
        $result = [];
        foreach ($resultByKeyWord as $value) {
            $task = $repPrzetargi->findOneBy(array('id' => $value->getPrzetargId()));
            $result[] = $task;
        }
        return $result;
    }
    
    private function getAuctiongByKeyWordAndLocation($keyWord, $location) {
        $repPrzetargiExtrasShortkrs = $this->getDoctrine()->getRepository('AppBundle:PrzetargiExtrasShortkrs');
        $repPrzetargi = $this->getDoctrine()->getRepository('AppBundle:Przetargi');
        $resultByKeyWord = $repPrzetargiExtrasShortkrs->createQueryBuilder('p')
            ->add('where', 'MATCH_AGAINST(p.nazwaZamowienia, p.przedmiotZam, p.rodzajZam, :searchterm) > 0.8')
            ->setParameter('searchterm', "$keyWord")
            //->orderBy('p.dataPublikacji', 'DESC')
            ->getQuery()
            ->getResult();
        $result = [];
        foreach ($resultByKeyWord as $value) {
            $task = $repPrzetargi->getByLocation($value->getPrzetargId(), $location);
            if (!empty($task)) {
                $result[] = $task[0];
            }
        }
        return $result;
    }
}
