<?php

namespace App\Form;


use App\Entity\PAGOSRoberto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\GreaterThan;


class UpdatePagosFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fechaPago', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                // Agrega aquí las opciones de formato de fecha si es necesario
            ])
            ->add('pago', IntegerType::class, [
                'constraints' => [
                    new GreaterThan([
                        'value' => 999,
                        'message' => 'El pago debe ser igual o superior a 1000.',
                    ]),
                ],
            ])
            ->add('id', HiddenType::class, [
                'mapped' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PAGOSRoberto::class,
        ]);
    }
}
