<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use App\Repository\MissionRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListingMissionController extends AbstractController
{
    /** 
     * @Route("/listing/mission/{clientId<\d+>}", name="listing_mission")
     */
    public function showMissions(MissionRepository $repository, ClientRepository $repository2, $clientId)
    {
        dump($clientId);
        $missions = $repository->findByClientId($clientId);
        $client = $repository2->find($clientId);
        dump($missions);
        return $this->render('listing_mission/index.html.twig', [
            'missions' => $missions,
            'client' => $client
        ]);
    }
}
