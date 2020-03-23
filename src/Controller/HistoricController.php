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
    public function historic(ClientRepository $clientRepository, MissionRepository $missionRepository, $id_user)
    {   
        $clients = $clientRepository->findClientsByUserId($id_user); 
        // dump($clients);
        // dump(count($clients));
        for($i = 0; $i<count($clients); $i++){
            $id_client = $clients[$i]->getId();
            $missions[$i] = $missionRepository->findMissionsByClientId($id_client);
        }
        // dump($missions);
        return $this->render('historic/index.html.twig', [
            'clients' => $clients,
            'missions'=> $missions,
        ]);
    }
}
