<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\Mission;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class NewMissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientId', EntityType::class, [
                'class' => Client::class,
                'mapped' => true,
                'query_builder' => function (EntityRepository $client) {
                    return $client->createQueryBuilder('c')
                        ->orderBy('c.society', 'ASC');
                },
                'choice_attr' => function ($choice, $key, $value) {
                    if ($choice == $value) {
                        return ['class' => 'selected'];
                    } else {
                        return ['class' => 'selectedTEST'];
                    }
                },
                'label_attr' => ['class' => 'text-info'],
                'attr' => ['class' => 'ckeditor relief'],
                'choice_label' => 'society',
                'label' => 'Client',
            ])
            ->add('titleMission', TextType::class, [
                'attr' => ['class' => 'relief'],
            ])
            ->add('chrono', TimeType::class, [
                'input'  => 'datetime',
                'widget' => 'choice',
                'attr' => ['class' => 'relief'],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Creer une mission',
                'attr' => ['class' => 'btn btn-info btn-lg btn-block relief'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mission::class,
        ]);
    }
}
