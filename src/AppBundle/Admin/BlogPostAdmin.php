<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogPostAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Content', array('class' => 'col-md-9'))
                ->add('title', 'text')
                ->add('body', 'textarea')
            ->end()
            ->with('Category', array('class' => 'col-md-9'))
                ->add('category', 'entity', array(
                    'class' => 'AppBundle\Entity\Category',
                    'choice_label' => 'name',
                ))
            ->end()
            ->with('Metadata', array('class' => 'col-md-9'))
                ->add('draft')
                ->add('createdAt', 'datetime')
            ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('draft')
            ->add('createdAt')
        ;
    }
}