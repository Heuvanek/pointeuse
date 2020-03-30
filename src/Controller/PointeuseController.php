<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\EditPointeuseType;
use App\Repository\ClientRepository;
use App\Repository\MissionRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;

class PointeuseController extends AbstractController
{
    /**
     * @Route("/pointeuse/{missionId<\d+>}", name="pointeuse")
     */
    public function pointeuseMission($missionId, ClientRepository $repositoryClient, MissionRepository $repositoryMission)
    {
        $mission = $repositoryMission->find($missionId);
        $client = $repositoryClient->find($mission->getClientId()->getId());
        return $this->render('pointeuse/index.html.twig', [
            'mission' => $mission,
            'client' => $client
        ]);
    }
    /**
     * @Route("/pointeuse/index", name="pointeuse_index")
     */
    public function pointeuseIndex(ClientRepository $repositoryClient, MissionRepository $repositoryMission)
    {
        $mission = $repositoryMission->findOneBy(
            [],
            ['id' => 'DESC'],
        );
        dump($mission);

        $client = $repositoryClient->find($mission->getClientId()->getId());
        return $this->render('pointeuse/index.html.twig', [
            'mission' => $mission,
            'client' => $client
        ]);
    }
}
