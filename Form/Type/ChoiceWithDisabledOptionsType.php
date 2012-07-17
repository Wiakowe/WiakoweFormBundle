<?php
namespace Wiakowe\FormBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

/**
 * A type which allows to disable an array of choices.
 *
 * @author Roger Llopart Pla <lumbendil@gmail.com>
 *
 * todo: Add a validator for this type to verify that the option hasn't been selected.
 */
class ChoiceWithDisabledOptionsType extends ChoiceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->setAttribute('disabled_choices', $options['disabled_choices']);
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form)
    {
        $view->set('disabled_choices', $form->getAttribute('disabled_choices'));
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOptions(array $options)
    {
        $defaultOptions = parent::getDefaultOptions($options);

        $defaultOptions['disabled_choices'] = array();

        return $defaultOptions;
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(array $options)
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
