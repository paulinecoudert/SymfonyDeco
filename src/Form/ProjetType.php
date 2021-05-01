<?php

namespace App\Form;

use App\Entity\Projet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
            ->add('photo')
            ->add('statut', ChoiceType::class, ['choices' => $this->getChoices()])
            ->add('travaux');
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
}
