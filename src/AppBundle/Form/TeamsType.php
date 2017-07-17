<?php

namespace AppBundle\Form;

use AppBundle\Entity\Teams;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RangeType;

class TeamsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('teamname',TextType::class, [
                'label'=> 'Name of your new team:',
                'attr' => array(
                'min' => 1,
                'max' => 5
            )])
            ->add('Submit', SubmitType::class, [
                'attr'=> [
                    'class' => 'btn btn-info btn-lg'
                ]]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Teams::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_teams';
    }


}