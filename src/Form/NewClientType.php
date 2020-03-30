<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class NewClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('society', TextType::class, [
                'label_attr' => ['class' => 'text-info'],
                'attr' => ['class' => 'ckeditor', 'class' => 'relief'],
            ])
            ->add('firstName', TextType::class, [
                'attr' => ['class' => 'relief'],
            ])
            ->add('lastName', TextType::class, [
                'attr' => ['class' => 'relief'],
            ])
            ->add('email', EmailType::class, [
                'attr' => ['type' => 'email', 'pattern' => '.+@+.+', 'class' => 'relief'],
            ])
            ->add('phone', TextType::class, [
                'attr' => ['class' => 'relief'],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter',
                'attr' => ['class' => 'btn btn-info btn-lg btn-block relief'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
