<?php

namespace ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class FormCreationRecetteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomrecette')
      /*  ->add('aliment', EntityType::class, array(
            'class' => "ProjetBundle:Aliments",
            'choice_label' => 'nomAliment'
            )
        )
        */
        ->add('aliment')
       ->add('submit', SubmitType::class,
          array(
            'label' => 'Creation',
            'attr' =>  array('class'=>'btn btn-success')
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projetbundle_recette';
    }


}
