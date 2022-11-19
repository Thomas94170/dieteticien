<?php

namespace App\Controller\Admin;

use App\Entity\Recette;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class RecetteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Recette::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('titre'),
            TextField::new('description'),
            TextField::new('temps_preparation'),
            TextField::new('temps_repos'),
            TextField::new('temps_cuisson'),
            TextField::new('ingredients'),
            TextField::new('etape'),
            TextField::new('allergenes'),
            BooleanField::new('vegetarien'),
            TextField::new('image'),

        ];
    }

}
