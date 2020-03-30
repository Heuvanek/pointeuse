<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use App\Repository\MissionRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HistoricController extends AbstractController
{
    /**
     * @Route("/historic/{userId<\d+>}", name="historic")
     */
    public function index(ClientRepository $clientRepository, MissionRepository $missionRepository, $userId)
    {
        $clients = $clientRepository->findByUserId($userId);
        // dump($clients);
        // dump(count($clients));
        for ($i = 0; $i < count($clients); $i++) {
            $client = $clients[$i]->getId();
            $missions[$i] = $missionRepository->findByClientId($client);
        }
        // dump($missions);
        return $this->render('historic/index.html.twig', [
            'clients' => $clients,
            'missions' => $missions,
        ]);
    }
    /**
     * @Route("/historic/{userId<\d+>}/{date<\d+>}", name="historicpermonth")
     */
    public function historicPerMonth(ClientRepository $clientRepository, MissionRepository $missionRepository, $userId)
    {
        $clients = $clientRepository->findByUserId($userId);
        // dump($clients);
        // dump(count($clients));
        for ($i = 0; $i < count($clients); $i++) {
            $client = $clients[$i]->getId();
            $missions[$i] = $missionRepository->findByClientId($client);
        }
        // dump($missions);
        return $this->render('historic/index.html.twig', [
            'clients' => $clients,
            'missions' => $missions,
        ]);
    }
}
