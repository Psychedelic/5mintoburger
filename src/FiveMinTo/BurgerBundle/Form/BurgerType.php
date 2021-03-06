<?php

namespace FiveMinTo\BurgerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use FiveMinTo\BurgerBundle\Form\BurgerIngredientType;

class BurgerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreBurger')
            ->add('phraseAccrocheBurger')
            ->add('phraseFinaleBurger')
            ->add('urlPhotoBurger',		'url')
            ->add('urlVideoBurger',		'url')
            ->add('descriptionBurger')
            ->add('metaKeywords', 		'textarea', array('required' => false))
            ->add('metaDescription', 	'textarea', array('required' => false))
            ->add('metaTitle', 			'textarea', array('required' => false))
            ->add('burgerIngredient', 'collection', array(
                'type' => new BurgerIngredientType(),
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,	
            ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FiveMinTo\BurgerBundle\Entity\Burger'
        ));
    }

    public function getName()
    {
        return 'fiveminto_burgerbundle_burgertype';
    }
}
