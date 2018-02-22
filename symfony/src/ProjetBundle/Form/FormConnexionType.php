<?php
// src/OC/PlatformBundle/Form/AdvertType.php

namespace ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormTypeInterface;

class FormConnexionType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('login', TextType::class,array('attr' =>  array('placeholder' => "login")))
    ->add('password', PasswordType::class, array('attr' =>  array('placeholder' => "Mot de passe")))
    ->add('submit', SubmitType::class,
      array(
        'label' => 'Connexion',
        'attr' =>  array('class'=>'btn btn-success')
        )
      );

  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
  }


  public function getName()
  {
    return 'ProjetBundle_Form_inscription';
  }

}
