<?php

namespace App\Form;

use App\Entity\ProjetSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProjetSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('budget', IntegerType::class, [
                'required' => false,
                'label' => 'Budget',
                'attr' => [
                    'placeholder' => 'Budget maximum'
                ]
            ])
            ->add(
                'travaux',
                ChoiceType::class,
                ['choices' => $this->getChoicesTravaux()]

            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProjetSearch::class,
            'method' => 'get',
            'csrf_protection' => false,
        ]);
    }

    private function getChoicesTravaux()
    {
        $choices = ProjetSearch::TRAVAUX;
        $output = [];
        foreach ($choices as $k => $v) {
            $output[$v] = $k;
        }
        return $output;
    }

    public function getBlockPrefix()

    {
        return "";
    }
}
