<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use App\Repository\MissionRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HistoricController extends AbstractController
{
    /*
     * @Route("/historic", name="historics")
     */
    public function index()
    {
        return $this->render('historic/index.html.twig', [
            'controller_name' => 'HistoricController',
            'title' => 'historique mensuel',
        ]);
    }
    /**
     * @Route("/historic/{id_user<\d+>}", name="historic")
     */
    public function historic(ClientRepository $repository, MissionRepository $repository2, $id_user)
    {
        $clients = $repository->findClientsByUserId($id_user); 
        dump($clients);
        $id_client = $clients->getId();
        $missions = $repository2->findMissionsByClientId($id_client);
        return $this->render('historic/index.html.twig', [
            'clients' => $clients,
            'missions'=> $missions,
        ]);
    }
}
