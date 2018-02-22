<?php

namespace ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FormInscriptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('adressemailutilisateur')->add('age')->add('pseudoutilisateur')->add('mdputilisateur')        ;
        $builder->add('sexe', ChoiceType::class,array('choices' =>  array("H" => "H", "F" => "F"), 'attr' => array('value' => "sexe")));
        $builder->add('submit', SubmitType::class,
          array(
            'label' => 'Connexion',
            'attr' =>  array('class'=>'btn btn-success')
            )
          );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjetBundle\Entity\Utilisateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projetbundle_utilisateur';
    }


}
