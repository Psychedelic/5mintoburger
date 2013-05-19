<?php

namespace FiveMinTo\BurgerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BurgerIngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantite')
            ->add('ingredient', 'entity', array(
				  'class'    => 'FiveMinToBurgerBundle:Ingredient',
				  'property' => 'nomIngredientSingulier',
				  'multiple' => false,
				  'expanded' => false
		));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FiveMinTo\BurgerBundle\Entity\BurgerIngredient'
        ));
    }

    public function getName()
    {
        return 'fiveminto_burgerbundle_burgeringredienttype';
    }
}
