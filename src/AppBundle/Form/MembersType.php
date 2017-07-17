<?php
namespace AppBundle\Form;
use AppBundle\Entity\UsersTeams;
use AppBundle\Entity\Teams;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class MembersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('lastname')->add('email');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Users'
        ));
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_members';
    }
}