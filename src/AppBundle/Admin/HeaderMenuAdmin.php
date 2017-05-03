<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class HeaderMenuAdmin extends Admin
{

    // les champs du formulaire que l'on peut rentrer
    protected function configureFormFields(FormMapper $formMapper)
    {
         $formMapper
            ->with('Content', array('class' => 'col-md-9'))
                ->add('name', 'text')
                ->add('logo', 'text')
                ->add('tel', 'text')
                ->add('menu', 'text')
                ->add('bouton', 'text')
            ->end()
        ;
    }

// possibilité de filtre
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
    }

// ce qui sera affiché dans la liste du back office
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('logo')
            ->add('menu')
        ;
    }

}