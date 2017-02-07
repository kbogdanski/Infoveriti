<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class SimpleSearchType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('keyWord','text', array('label' => ' '))
            ->add('location', 'text', array('label' => ' '))
            ->add('search_buttom', 'submit', array());
    }
    
    public function getName() {
        
    }
}

