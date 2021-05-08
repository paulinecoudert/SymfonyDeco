<?php

namespace App\Form;

use App\Entity\Projet;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('budget')
            ->add('description')
            ->add('dateDeDebut')
            ->add('imageFile', FileType::class, [
                'required' => false
            ])

            ->add('statut', ChoiceType::class, ['choices' => $this->getChoices()])
            ->add('travaux',ChoiceType::class, ['choices' => $this->getChoicesTravaux()]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,

        ]);
    }

    private function getChoices()
    {
        $choices = Projet::STATUT;
        $output = [];
        foreach ($choices as $k => $v) {
            $output[$v] = $k;
        }
        return $output;
    }

    private function getChoicesTravaux()
    {
        $choices = Projet::TRAVAUX;
        $output = [];
        foreach ($choices as $k => $v) {
            $output[$v] = $k;
        }
        return $output;
    }
}
