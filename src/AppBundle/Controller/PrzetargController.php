<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Form\Type\SimpleSearchType;

use Doctrine\ORM\Tools\Pagination\Paginator;

class PrzetargController extends Controller {
    
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
            return array('przetargi' => $przetargiToDisplay, 'pagination' => 1, 'allPages' => $allPages, 'page' => $page, 'form' => $form->createView()) ;
        }
        
        if ($req->getMethod() === 'POST') {
            $form = $this->createForm(new SimpleSearchType());
            $form->handleRequest($req);
            
            $allPages = 1;
            $page = 0;
            
            
            if ($form->isSubmitted() && $form->isValid()) {
                $dataForm = $form->getData();
                $repPrzetargi = $this->getDoctrine()->getRepository('AppBundle:Przetargi');
                if ($dataForm['keyWord'] !== NULL && $dataForm['location'] !== NULL) {
                    $przetargiByKeyWordAndLocation = $repPrzetargi->getAuctiongByKeyWordAndLocation($dataForm['keyWord'], $dataForm['location']);
                    return array('przetargi' => $przetargiByKeyWordAndLocation, 'pagination' => 0, 'allPages' => $allPages, 'page' => $page, 'form' => $form->createView());
                } else {
                    if ($dataForm['location'] !== NULL) {
                        $przetargiByLocation = $repPrzetargi->getAuctiongByLocation($dataForm['location']);
                        return array('przetargi' => $przetargiByLocation, 'pagination' => 0, 'allPages' => $allPages, 'page' => $page, 'form' => $form->createView());
                    }
                    if ($dataForm['keyWord'] !== NULL) {
                        $przetargiByKeyWord = $repPrzetargi->getAuctiongByKeyWord($dataForm['keyWord']);
                        return array('przetargi' => $przetargiByKeyWord, 'allPages' => $allPages, 'pagination' => 0, 'page' => $page, 'form' => $form->createView());
                    }
                }
                return $this->redirectToRoute('homepage');
            }
        }
    }
    

    /**
     * @Route("/przetarg/{id}", requirements={"id"="\d+"})
     * @Template()
     */
    public function przetargAction (Request $req, $id) {
        $repPrzetargi = $this->getDoctrine()->getRepository('AppBundle:Przetargi');
        $przetarg = $repPrzetargi->findOneBy(array('id' => $id));
        
        $form = $this->createForm(new SimpleSearchType(), array('action' => $this->generateUrl('homepage'), 'method' => 'GET'));
        $form->handleRequest($req);
        
        return array('przetarg' => $przetarg, 'form' => $form->createView());
    }
    
    
    /**
     * @Route("/wyszukiwarka")
     * @Template()
     */
    public function searchAction() {
        //$task = $form->getData();
        $repBranze = $this->getDoctrine()->getRepository('AppBundle:PrzetargiBranze');
        $branze = $repBranze->findAll();
        
        return array('branze' => $branze);
    }
    
    
    /**
     * @Route("/znalezione-przetargi")
     * @Template()
     */
    public function findAuctionsAction(Request $req) {
        $dataForm = $req->request->all();
        $repPrzetargi = $this->getDoctrine()->getRepository('AppBundle:Przetargi');
        $results = $repPrzetargi->getByAdvancedSearch($dataForm['radios'], $dataForm['id_auction'], $dataForm['key_word'], $dataForm['city'], $dataForm['organiser'],
                $dataForm['regions_string'], $dataForm['branches_string'], $dataForm['cpv'], $dataForm['date_added_from'], $dataForm['date_added_to']);
        
        $numOfResults = count($results);
        $result = array_chunk($results, $dataForm['items_see']);
        
        return array('dataForm' => $dataForm, 'przetargi' => $result[0], 'numOfResults' => $numOfResults);
    }

    
    /**
     * @Route("/getSubbranches")
     * @Template()
     */
    public function getSubbranchesAction(Request $req) {
        $branza_id = $req->request->get('branche_id');
        
        $repPodbranze = $this->getDoctrine()->getRepository('AppBundle:PrzetargiPodbranze');
        $podbranze = $repPodbranze->findBy(array('branza_id' => $branza_id));
        
        $podbranzeJSON = json_encode($podbranze);
        
        return new JsonResponse(array($podbranzeJSON));
    }
    
    
    
    /*PRIVATE FUNCTION - QUERY DQL*/
    

    /*AKCJE TESTOWE*/
    
    /**
     * @Route("/test")
     * @Template()
     */
    public function testAction () {
        /*$em = $this->getDoctrine()->getManager();
        
        //$result = $em->getRepository('AppBundle:Przetargi')->searchMatchAgainst();
        $result = $em->getRepository('AppBundle:Przetargi')->getMatchAgainst();
        $rep =  $this->getDoctrine()->getRepository('AppBundle:PrzetargiCpv');
        $result2 = $rep->findAll();
        
        return array('result' => $result, 'result2' => $result2);*/
    }
    
   
    /**
     * @Route("/test2")
     * @Template()
     */
    public function test2Action () {
        //$em = $this->getDoctrine()->getManager();
        //$result = $em->getRepository('AppBundle:Przetargi')->getAdvancedSearch();
        //return array('result' => $result);
    }
    
    /*PRYWATNE METODY TESTOWE*/
    /*Stare wersje - nie potrzebne, zamienione nowymi w PrzetargiRepository
    private function getAuctiongByLocation2($location) {
        $rep = $this->getDoctrine()->getRepository('AppBundle:Przetargi');    
        $result = $rep->createQueryBuilder('p')
            ->add('where', 'MATCH_AGAINST(p.miejscowosc, p.wojewodztwo, :searchterm) > 0.8')
            ->setParameter('searchterm', "$location")
            ->orderBy('p.dataPublikacji', 'DESC')
            ->getQuery()
            ->getResult();
        
        return $result;
    }
    
    private function getAuctiongByKeyWord2($keyWord) {
        $repPrzetargiExtrasShortkrs = $this->getDoctrine()->getRepository('AppBundle:PrzetargiExtrasShortkrs');
        $repPrzetargi = $this->getDoctrine()->getRepository('AppBundle:Przetargi');
        $resultByKeyWord = $repPrzetargiExtrasShortkrs->createQueryBuilder('p')
            ->add('where', 'MATCH_AGAINST(p.nazwaZamowienia, p.przedmiotZam, p.rodzajZam, :searchterm) > 0.8')
            ->setParameter('searchterm', "$keyWord")
            ->orderBy('MATCH_AGAINST(p.nazwaZamowienia, p.przedmiotZam, p.rodzajZam, :searchterm)', 'DESC')
            ->getQuery()
            ->getResult();
        $result = [];
        foreach ($resultByKeyWord as $value) {
            $task = $repPrzetargi->findOneBy(array('id' => $value->getPrzetargId()));
            $result[] = $task;
        }
        return $result;
    }
    
    private function getAuctiongByKeyWordAndLocation2($keyWord, $location) {
        $repPrzetargiExtrasShortkrs = $this->getDoctrine()->getRepository('AppBundle:PrzetargiExtrasShortkrs');
        $repPrzetargi = $this->getDoctrine()->getRepository('AppBundle:Przetargi');
        $resultByKeyWord = $repPrzetargiExtrasShortkrs->createQueryBuilder('p')
            ->add('where', 'MATCH_AGAINST(p.nazwaZamowienia, p.przedmiotZam, p.rodzajZam, :searchterm) > 0.8')
            ->setParameter('searchterm', "$keyWord")
            ->orderBy('MATCH_AGAINST(p.nazwaZamowienia, p.przedmiotZam, p.rodzajZam, :searchterm)', 'DESC')
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
    }*/
    
}