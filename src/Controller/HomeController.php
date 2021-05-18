<?php

namespace App\Controller;

use App\Entity\Hobbies;
use App\Entity\Education;
use App\Entity\ProfessionnalExperiences;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/exps", name="exps")
     */
    public function exps(): Response
    {
        $educationRepository = $this->getDoctrine()->getRepository(Education::class);
        $experiencesRepository = $this->getDoctrine()->getRepository(ProfessionnalExperiences::class);

        $educations = $educationRepository->findAll();
        $experiences = $experiencesRepository->findAll();

        return $this->render('home/exps.html.twig', ['educations' => $educations, 'experiences' => $experiences]);
    }

    /**
     * @Route("/hobbies", name="hobbies")
     */
    public function hobbies(): Response
    {
        $hobbiesRepository = $this->getDoctrine()->getRepository(Hobbies::class);
        $hobbies = $hobbiesRepository->findAll();

        return $this->render('home/hobbies.html.twig', ['hobbies' => $hobbies]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig');
    }
}
