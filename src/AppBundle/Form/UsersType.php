<?php

namespace AppBundle\Form;

use AppBundle\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label'=> 'Username*'
            ])
            ->add('name', TextType::class, [
                'label'=> 'Your Name',
                'required' => false
            ])
            ->add('lastname', TextType::class, [
                'label'=> 'Your Last Name',
                'required' => false
            ])
            ->add('email', EmailType::class, [
                'label'=> 'Email*'
            ])
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => [ 'label' => 'Password*' ],
                'second_options' => [ 'label' => 'Repeat Password*' ]
            ))
            ->add('register', SubmitType::class, [
                'attr'=> [
                    'class' => 'btn btn-info btn-lg'
                ]
            ])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Users::class
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_users';
    }


}
