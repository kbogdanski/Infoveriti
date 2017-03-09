<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PrzetargiRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PrzetargiRepository extends EntityRepository {
    
    public function getAllCurrentAuctions() {
        $result = $this->getEntityManager()->createQuery(
                "SELECT p
                FROM AppBundle:Przetargi p 
                WHERE p.zp <> 'ZP-403'
                ORDER BY p.dataPublikacji DESC");
        return $result;
    }
    
    public function getAllEndAuctions() {
        $result = $this->getEntityManager()->createQuery(
                "SELECT p
                FROM AppBundle:Przetargi p 
                WHERE p.zp = 'ZP-403'
                ORDER BY p.dataPublikacji DESC");
        return $result;
    }

        public function getAuctiongByLocation($location) {
        $result = $this->getEntityManager()->createQuery(
            "SELECT p
            FROM AppBundle:Przetargi p WHERE
            MATCH_AGAINST(p.miejscowosc, p.wojewodztwo, :searchtext) > 0.8
            ORDER BY p.dataPublikacji DESC")
            ->setParameter('searchtext', "$location")
            ->getResult();
        
        return $result;
    }
    
    public function getAuctiongByKeyWord($keyWord) {
        $result = $this->getEntityManager()->createQuery(
                "SELECT p, pes
                FROM AppBundle:Przetargi p JOIN p.przetargiExtrasShortkrs pes
                WITH MATCH_AGAINST(pes.nazwaZamowienia, pes.przedmiotZam, pes.rodzajZam, :searchtext) > 0.8
                ORDER BY MATCH_AGAINST(pes.nazwaZamowienia, pes.przedmiotZam, pes.rodzajZam, :searchtext) DESC")
                ->setParameter('searchtext', "$keyWord")
                ->getResult();
        
        return $result;
    }
    
    public function getAuctiongByKeyWordAndLocation($keyWord, $location) {
        $result = $this->getEntityManager()->createQuery(
                "SELECT p, pes
                FROM AppBundle:Przetargi p JOIN p.przetargiExtrasShortkrs pes
                WITH MATCH_AGAINST(pes.nazwaZamowienia, pes.przedmiotZam, pes.rodzajZam, :searchkeyword) > 0.8
                AND MATCH_AGAINST(p.miejscowosc, p.wojewodztwo, :searchlocation) > 0.8
                ORDER BY MATCH_AGAINST(pes.nazwaZamowienia, pes.przedmiotZam, pes.rodzajZam, :searchkeyword) DESC")
                ->setParameter('searchkeyword', "$keyWord")
                ->setParameter('searchlocation', "$location")
                ->getResult();
        
        return $result;
    }
    
    public function getByAdvancedSearch ($status, $idAuction, $keyWord, $city, $organiser, $regions, $branches, $cpv, $dataAddedFrom, $dataAddedTo) {
        $query = "SELECT p, pes, pcpv FROM AppBundle:Przetargi p JOIN p.przetargiExtrasShortkrs pes JOIN p.przetargiCpv pcpv ";
        $query = $query.  $this->checkStatus($status);
        $query = $query.  $this->checkIdAuction($idAuction);
        $query = $query.  $this->checkKeyWord($keyWord);
        $query = $query.  $this->checkCity($city);
        $query = $query.  $this->checkOrganiser($organiser);
        $query = $query.  $this->checkRegions($regions);
        $query = $query.  $this->checkBranches($branches);
        $query = $query.  $this->checkCpv($cpv);
        $query = $query.  $this->checkDataAddedFrom($dataAddedFrom);
        $query = $query.  $this->checkDataAddedTo($dataAddedTo);

        $em = $this->getEntityManager();
        
        if ($keyWord !== '') {
            $query = $query."ORDER BY MATCH_AGAINST(pes.nazwaZamowienia, pes.przedmiotZam, pes.rodzajZam, :searchtext) DESC";
            $results = $em->createQuery($query)
                    ->setParameter('searchtext', "$keyWord")
                    ->getResult();

            return $results;
            
        } else {
            $query = $query."ORDER BY p.dataPublikacji DESC";
            $results = $em->createQuery($query)
                    ->getResult();
            
            return $results;
        }
    }
    
    private function checkStatus ($status) {
        if ($status === '1') {
            return "WITH p.zp <> 'ZP-403' ";
        } else {
            return "WITH p.zp = 'ZP-403' ";
        }
    }
    
    private function checkIdAuction ($idAuction) {
        if ($idAuction !== '') {
            return "AND p.id = '$idAuction' ";
        }
    }
    
    private function checkKeyWord ($keyWord) {
        if ($keyWord !== '') {
            return "AND MATCH_AGAINST(pes.nazwaZamowienia, pes.przedmiotZam, pes.rodzajZam, :searchtext) > 0.8 ";
        }
    }
    
    private function checkCity ($city) {
        if ($city !== '') {
            return "AND p.miejscowosc = '$city' ";
        }
    }
    
    private function checkOrganiser ($organiser) {
        if ($organiser !== '') {
            return "AND p.nazwa LIKE '%$organiser%' ";
        }
    }
    
    private function checkRegions ($regions) {
        if ($regions !== '') {
            $regionsArray = explode(";", $regions);
            $result = "AND (";
            foreach ($regionsArray as $value) {
                $result = $result."p.wojewodztwo = '$value' OR ";
            }
            $result = substr($result, 0, strlen($result)-4);
            $result = $result.") ";
            
            return $result;
        }
    }
    
    private function checkBranches ($branches) {
        if ($branches !== '') {
            $branchesArray = explode(";", $branches);
            $result = "AND (";
            foreach ($branchesArray as $value) {
                $result = $result."pcpv.cpv LIKE '$value%' OR ";
            }
            $result = substr($result, 0, strlen($result)-4);
            $result = $result.") ";
            
            return $result;
        }
    }
    
    private function checkCpv($cpv) {
        if ($cpv !== '') {
            return "AND pcpv.cpv LIKE '$cpv%' ";
        }
    }
    
    private function checkDataAddedFrom ($dataAddedFrom) {
        if ($dataAddedFrom !== '') {
            return "AND p.dataPublikacji >= '$dataAddedFrom' ";
        }
    }
    
    private function checkDataAddedTo ($dataAddedTo) {
        if ($dataAddedTo !== '') {
            return "AND p.dataPublikacji <= '$dataAddedTo' ";
        }
    }














    /* TESTY*/
    
    public function searchMatchAgainst() {
        $result = $this->getEntityManager()->createQuery(
                "SELECT p
                FROM AppBundle:PrzetargiExtrasShortkrs p WHERE
                MATCH_AGAINST(p.nazwaZamowienia, p.przedmiotZam, p.rodzajZam, :searchterm) > 0.8"
                )
                ->setParameter('searchterm','sprzęt komputerowy')
                ->getResult();
        
        return $result;
    }
    
    public function getMatchAgainst() {
        $em = $this->getEntityManager();

        $query = $em->createQuery(
            "SELECT pp
            FROM AppBundle:PrzetargiExtrasShortkrs pp JOIN pp.przetargId p
            WITH p.wojewodztwo = 'mazowieckie' AND
            MATCH_AGAINST(pp.nazwaZamowienia, pp.przedmiotZam, pp.rodzajZam, :searchterm) > 0.8")
                ->setParameter('searchterm','sprzęt komputerowy');
                
        /*
         * $query = $em->createQuery(
            "SELECT ss
            FROM WebDiaryBundle:Student_subjects ss JOIN ss.student student
            WITH student.class = '$idClass' AND ss.subject = '$idSubject'");
         */
        
        
        
        return $query->getResult();
    }
    
    public function getAdvancedSearch() {
        $em = $this->getEntityManager();

        $query = $em->createQuery(
            "SELECT p, pp, cpv
            FROM AppBundle:Przetargi p JOIN p.przetargiExtrasShortkrs pp JOIN p.przetargiCpv cpv
            WITH p.zp <> 'ZP-403'
            AND p.id = 96692017
            AND MATCH_AGAINST(pp.nazwaZamowienia, pp.przedmiotZam, pp.rodzajZam, :searchterm) > 0.8
            AND p.miejscowosc = 'Warszawa'
            AND p.nazwa LIKE '%Politechnika%'
            AND (p.wojewodztwo = 'mazowieckie' OR p.wojewodztwo='podlaskie')
            AND (cpv.cpv LIKE '48%')
            
            
            ")
                ->setParameter('searchterm', 'sprzęt komputerowy');
                
        /*
         * W powyrzszym zapytaniu brakuje jeszcze:
         * 
         * AND cpv.cpv = ''
         * AND dataPublikacji > od AND dataPublikacji < do
         */
        
        
        
        return $query->getResult();
    }
    
    /*JUZ NIE POTRZEBNE*/
    
    /*
         /*public function getByLocation($id, $location) {
        $query = $this->getEntityManager()->createQuery(
            "SELECT p
            FROM AppBundle:Przetargi p WHERE
            p.id = $id AND (p.miejscowosc LIKE '$location' OR p.wojewodztwo LIKE '$location')"
        );
        return $query->getResult();
    }
     */
    
    
    
}
        /*
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
        */



        /*$em = $this->getEntityManager();

        $query = $em->createQuery(
            "SELECT person
            FROM CodersLabBundle:Persons person WHERE
            person.surname LIKE '$partOfName%'");

        return $query->getResult();*/

