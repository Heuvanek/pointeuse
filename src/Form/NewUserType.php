<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class NewUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => ['type' => 'email', 'pattern' => '.+@+.+', 'class' => 'relief'],
            ])
            ->add('password', PasswordType::class, [
                'attr' => ['class' => 'relief'],
            ])
            ->add('firstName', TextType::class, [
                'attr' => ['class' => 'relief'],
            ])
            ->add('lastName', TextType::class, [
                'attr' => ['class' => 'relief'],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Créer un compte',
                'attr' => ['class' => 'btn btn-info btn-lg btn-block relief'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
