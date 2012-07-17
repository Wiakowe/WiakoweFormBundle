<?php
namespace Wiakowe\FormBundle\Tests\Fixtures\Form\Extension;

use Symfony\Component\Form\AbstractExtension;
use Wiakowe\FormBundle\Form\Type;
/**
 * @author Roger Llopart Pla <lumbendil@gmail.com>
 */
class FormExtension extends AbstractExtension
{
    protected function loadTypes()
    {
        return array(
            new Type\ChoiceWithDisabledOptionsType()
        );
    }
}
