<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\NewClientType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewClientController extends AbstractController
{
    /**
     * @Route("/client/newclient", name="new_client")
     */
    public function createClient(EntityManagerInterface $manager, Request $request)
    {
        $client = new Client();
        $form = $this->createForm(NewClientType::class, $client);
        $form->handleRequest($request);
        dump($this->getUser());

        if ($form->isSubmitted() && $form->isValid()) {
            $client->setUserId($this->getUser());
            $manager->persist($client);
            $manager->flush();
            return $this->redirectToRoute('listing_client', [
                'userId' => $this->getUser()->getId(),
            ]);
        }
        return $this->render('new_client/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/client/delete/{clientId<\d+>}", name="delete_client", methods={"POST"})
     */
    public function deleteClient(Client $clientId, EntityManagerInterface $manager, Request $request)
    {

        $submittedToken = $request->request->get('token');
        if ($this->isCsrfTokenValid('delete_client', $submittedToken)) {
            $manager->remove($clientId);
            $manager->flush();
            $this->addFlash(
                'success',
                'Le client a été supprimé !'
            );
        }

        return $this->redirectToRoute('listing_client', [
            'userId' => $this->getUser()->getId(),
        ]);
    }
    /**
     * @Route("/client/edit/{clientId<\d+>}", name="edit_client")
     */
    public function editClient(Client $clientId, EntityManagerInterface $manager, Request $request)
    {
        $form = $this->createForm(NewClientType::class, $clientId);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->flush();
            $this->addFlash(
                'success',
                'Le client a été modifié !'
            );
            return $this->redirectToRoute('listing_client', [
                'userId' => $this->getUser()->getId(),
            ]);
        }
        return $this->render('new_client/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
