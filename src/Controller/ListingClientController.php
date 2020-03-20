<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use App\Repository\MissionRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListingClientController extends AbstractController
{
    /*
     * @Route("/listing/client", name="listing_client")
     */
    public function index()
    {
        return $this->render('listing_client/index.html.twig', [
            'controller_name' => 'ListingClientController',
        ]);
    }
    /*
     * @Route("/listing/mission", name="listing_mission")
     */
    public function mission()
    {
        return $this->render('listing_client/listingMission.html.twig', [
   
        ]);
    }

    /** 
     * @Route("/listing/mission/{id_client<\d+>}", name="listing_mission")
     */
    public function showMissions(MissionRepository $repository, $id_client){
        $missions = $repository->findMissionsByClientId($id_client); 
        dump($missions);
        return $this->render('listing_client/listingMission.html.twig', [
            'missions' => $missions,
        ]);
    }
    /** 
     * @Route("/listing/client/{id_user<\d+>}", name="listing_client")
     */
    public function showClients(ClientRepository $repository, $id_user){
        $clients = $repository->findClientsByUserId($id_user); 
        dump($clients);
        return $this->render('listing_client/index.html.twig', [
            'clients' => $clients,
        ]);
    }
}
