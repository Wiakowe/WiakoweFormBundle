<?php
namespace Wiakowe\FormBundle\Tests\Form\Type;

use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\Extension\Core\CoreExtension;
use Wiakowe\FormBundle\Tests\Fixtures\Form\Extension\FormExtension;
/**
 * @author Roger Llopart Pla <lumbendil@gmail.com>
 */
class ChoiceWithDisabledOptionsTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FormFactory
     */
    protected $factory;

    public function setUp()
    {
        $this->factory = new FormFactory(array(
            new CoreExtension,
            new FormExtension,
        ));
    }

    public function testDefaultConfig()
    {
        $form = $this->factory->create('choice_with_disabled_options');
        $view = $form->createView();

        $this->assertEquals(array(), $view->get('disabled_choices'));
    }

    public function testConfig()
    {
        $form = $this->factory->create('choice_with_disabled_options', null, array('disabled_choices' => array(1, 2)));
        $view = $form->createView();

        $this->assertEquals(array(1, 2), $view->get('disabled_choices'));
    }
}
