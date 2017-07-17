<?php

namespace AppBundle\Form;

use AppBundle\Entity\Users;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class LoginType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add(
                'username',TextType::class, [
                    'constraints' => [
                        new NotBlank()
                    ]
                ]
            )
            ->add(
                'password',PasswordType::class, [
                    'constraints' => [
                        new NotBlank()
                    ]
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
