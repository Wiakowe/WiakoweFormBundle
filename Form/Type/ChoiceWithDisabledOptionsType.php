<?php
namespace Wiakowe\FormBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormViewInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;

/**
 * A type which allows to disable an array of choices.
 *
 * @author Roger Llopart Pla <lumbendil@gmail.com>
 *
 * todo: Add a validator for this type to verify that the option hasn't been selected.
 */
class ChoiceWithDisabledOptionsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setAttribute(
            'disabled_choices',
            $options['disabled_choices']
        );
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormViewInterface $view, FormInterface $form, array $options)
    {
        $view->setVar(
            'disabled_choices',
            $form->getConfig()->getAttribute('disabled_choices')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'disabled_choices' => array(),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'choice';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'choice_with_disabled_options';
    }
}
