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
            ->add('email',EmailType::class,[
                'attr' => ['type' => 'email', 'pattern' => '.+@+.+'],
            ])
            ->add('password', PasswordType::class)
            ->add('forName')
            ->add('lastName')
            // ->add('roles', TextType::class,[
            //     'attr' => ['hidden' => 'true'],
            // ])
            ->add('submit',SubmitType::class, [
                'label' =>'Créer un compte',
                'attr' => ['class' => 'btn btn-info btn-lg btn-block'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
