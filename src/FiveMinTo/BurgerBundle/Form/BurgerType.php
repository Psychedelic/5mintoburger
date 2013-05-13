<?php

namespace FiveMinTo\BurgerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BurgerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreBurger')
            ->add('phraseAccrocheBurger')
            ->add('phraseFinaleBurger')
            ->add('urlPhotoBurger')
            ->add('urlVideoBurger')
            ->add('descriptionBurger')
            ->add('dateCreationBurger')
            ->add('metaKeywords')
            ->add('metaDescription')
            ->add('metaTitle')
            ->add('vote')
        ;
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
