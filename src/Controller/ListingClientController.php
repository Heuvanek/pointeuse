<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Client;
use App\Entity\Mission;
use App\Form\NewClientType;
use App\Repository\ClientRepository;
use App\Repository\MissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
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
        // $clients = $repository2->findClientByUserId($id_user); 
        dump($missions);
        return $this->render('listing_client/listingMission.html.twig', [
            'missions' => $missions,
            // 'clients'=> $clients,
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

    /**
     * @Route("/listing/client/delete/{id<\d+>}", name="client_delete", methods={"POST"})
     */
    public function delete(Client $client, EntityManagerInterface $manager, Request $request)
    {
 
        $submittedToken = $request->request->get('token');
        if($this->isCsrfTokenValid('delete-client', $submittedToken)){
            $manager->remove($client);
            $manager->flush();
            $this->addFlash(
                'success',
                'Le client a été supprimé !'
            );

        }

        return $this->redirectToRoute('listing_client', [
                 'id_user' => $client->getIdUser(),
             ]);
    }

       /**
     * @Route("/listing/client/edit/{id<\d+>}", name="client_edit")
     */
    public function edit(Client $client, EntityManagerInterface $manager, Request $request)
    {
        $form = $this->createForm(NewClientType::class, $client);
        $form->handleRequest($request);
        dump($form);
        if ($form->isSubmitted() && $form->isValid()) {
             $manager->flush();
             $this->addFlash(
                'success',
                'Le client a bien été modifié !'
            );
             return $this->redirectToRoute('listing_client', [
                 'id_user' => $client->getIdUser(),
             ]);
            
        }
        return $this->render('listing_client/create.html.twig',[
            'form' => $form->createView(),
       ]);
        
    }

    /**
     * @Route("/listing/mission/delete/{id<\d+>}", name="mission_delete", methods={"POST"})
     */
    public function deletem(Mission $mission, EntityManagerInterface $manager, Request $request)
    {
 
        $submittedToken = $request->request->get('token');
        if($this->isCsrfTokenValid('delete-mission', $submittedToken)){
            $manager->remove($mission);
            $manager->flush();
            $this->addFlash(
                'success',
                'La mission a été supprimé !'
            );
        }

        return $this->redirectToRoute('listing_mission', [
            'id_client' => $mission->getIdClient(),
        ]);
    }

    /**
     * @Route("/listing/mission/edit/{id<\d+>}", name="mission_edit")
     */
    public function editm(Mission $mission, EntityManagerInterface $manager, Request $request)
    {
    //     $form = $this->createForm(NewMissionType::class, $client);
    //     $form->handleRequest($request);
 
    //     if ($form->isSubmitted() && $form->isValid()) {
    //          $manager->flush();
    //          $this->addFlash(
    //             'success',
    //             'La mission a bien été modifié !'
    //         );
    //          return $this->redirectToRoute('listing_mission', [
    //             'id_client' => $mission->getIdClient(),
    //         ]);
            
    //     }
    //     return $this->render('listing_mission/create.html.twig',[
    //         'form' => $form->createView(),
    //    ]);
        
    }
}
