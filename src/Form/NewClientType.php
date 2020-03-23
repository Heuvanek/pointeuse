<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class NewClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('society',TextType::class, [
                'label_attr'=>['class'=>'text-info'],
                'attr' => ['class' => 'ckeditor'],
            ])
            ->add('name')
            ->add('surname')
            ->add('mail',EmailType::class,[
                'attr' => ['type' => 'email', 'pattern' => '.+@+.+'],
            ])
            ->add('phone')
            ->add('submit',SubmitType::class, [
                'label' =>'Ajouter',
                'attr' => ['class' => 'btn btn-info btn-lg btn-block'],
            ])
            ->add('id_user', NumberType::class,[
                'attr' => ['hidden' => 'false', 'value'=> 1],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
