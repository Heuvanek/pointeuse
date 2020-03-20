<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NewClientController extends AbstractController
{
    /**
     * @Route("/newclient", name="new_client")
     */
    public function index()
    {
        return $this->render('new_client/index.html.twig', [
            'controller_name' => 'NewClientController',
        ]);
    }
}
