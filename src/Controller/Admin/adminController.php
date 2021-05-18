<?php

namespace App\Controller\Admin;

use App\Entity\Education;
use App\Entity\ProfessionnalExperiences;
use App\Entity\Hobbies;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class adminController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Exos Sylfo');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

            MenuItem::linkToCrud('Education', 'fa fa-graduation-cap', Education::class),
            MenuItem::linkToCrud('Experiences', 'fa fa-briefcase', ProfessionnalExperiences::class),
            MenuItem::linkToCrud('Hobbies', 'fa fa-gamepad', Hobbies::class),
        ];
    }
}
