<?php

namespace App\Controller\Admin;

use App\Entity\ProfessionnalExperiences;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProfessionnalExperiencesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProfessionnalExperiences::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
