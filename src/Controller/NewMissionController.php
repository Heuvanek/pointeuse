<?php

namespace App\Controller;

use App\Entity\Mission;
use App\Form\NewMissionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewMissionController extends AbstractController
{
    /**
     * @Route("/mission/newmission", name="new_mission")
     */
    public function createMission(EntityManagerInterface $manager, Request $request)
    {
        $mission = new Mission();
        $mission->setCreatedAt(new \DateTime('now'));
        $form = $this->createForm(NewMissionType::class, $mission);
        $form->handleRequest($request);
        dump($this->getUser());

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($mission);
            $manager->flush();
            return $this->redirectToRoute('listing_mission', [
                'clientId' => $mission->getClientId()->getId(),
            ]);
        }
        return $this->render('new_mission/index.html.twig', [
            'form' => $form->createView(),
            'userId' => $this->getUser()
        ]);
    }
    /**
     * @Route("/mission/delete/{missionId<\d+>}", name="delete_mission", methods={"POST"})
     */
    public function deleteClient(Mission $missionId, EntityManagerInterface $manager, Request $request)
    {

        $submittedToken = $request->request->get('token');
        if ($this->isCsrfTokenValid('delete_mission', $submittedToken)) {
            $manager->remove($missionId);
            $manager->flush();
            $this->addFlash(
                'success',
                'La mission a été supprimé !'
            );
        }
        return $this->redirectToRoute('listing_mission', [
            'clientId' => $missionId->getClientId()->getId(),
        ]);
    }
    /**
     * @Route("/mission/edit/{missionId<\d+>}", name="edit_mission")
     */
    public function editClient(Mission $missionId, EntityManagerInterface $manager, Request $request)
    {
        $form = $this->createForm(NewMissionType::class, $missionId);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->flush();
            $this->addFlash(
                'success',
                'La mission a été modifiée !'
            );
            return $this->redirectToRoute('listing_mission', [
                'clientId' => $missionId->getClientId()->getId(),
            ]);
        }
        return $this->render('new_mission/index.html.twig', [
            'form' => $form->createView(),
            'userId' => $this->getUser()
        ]);
    }
}
