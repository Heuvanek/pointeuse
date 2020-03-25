<?php

namespace App\Controller;
use App\Entity\Client;
use App\Form\NewClientType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class NewClientController extends AbstractController
{
    /**
     * @Route("/newclient", name="new_client")
     */
    public function create(EntityManagerInterface $manager, Request $request)
    {
        $client = new Client();
        $form = $this->createForm(NewClientType::class, $client);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($client);
            $manager->flush();
        }
        return $this->render('new_client/create.html.twig',[
            'form' => $form->createView(),
       ]);
    }
}
