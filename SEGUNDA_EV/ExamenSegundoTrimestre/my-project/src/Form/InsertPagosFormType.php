<?php

namespace App\Form;

use App\Entity\Emp;
use App\Entity\PAGOSRoberto;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;

class InsertPagosFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pago', null, [
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 1000,
                        'message' => 'El pago debe ser igual o superior a 1000.',
                    ]),
                    new NotBlank(),
                ],
            ])
            ->add('fecha_pago')
            ->add('empleado', EntityType::class, [
                'class' => Emp::class,
                'choice_label' => 'id', // Mostrar el código del empleado
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PAGOSRoberto::class,
        ]);
    }
}
