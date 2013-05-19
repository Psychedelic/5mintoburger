<?php

namespace FiveMinTo\BurgerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomIngredientSingulier')
            ->add('nomIngredientPluriel')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FiveMinTo\BurgerBundle\Entity\Ingredient'
        ));
    }

    public function getName()
    {
        return 'fiveminto_burgerbundle_ingredienttype';
    }
}
