<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListingClientController extends AbstractController
{
    /** 
     * @Route("/listing/client/{userId<\d+>}", name="listing_client")
     */
    public function showClients(ClientRepository $repository, $userId)
    {
        $clients = $repository->findByUserId($userId);
        dump($clients);
        return $this->render('listing_client/index.html.twig', [
            'clients' => $clients,
        ]);
    }
}
