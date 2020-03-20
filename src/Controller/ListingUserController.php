<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListingUserController extends AbstractController
{
    /**
     * @Route("/listing/user", name="listing_user")
     */
    public function index()
    {
        return $this->render('listing_user/index.html.twig', [
            'controller_name' => 'ListingUserController',
        ]);
    }
}
