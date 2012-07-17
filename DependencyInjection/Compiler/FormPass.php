<?php
namespace Wiakowe\FormBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Roger Llopart Pla <lumbendil@gmail.com>
 */
class FormPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $resources = $container->getParameter('twig.form.resources');

        $resources[] = 'WiakoweFormBundle:Form:fields.html.twig';

        $container->setParameter('twig.form.resources', $resources);
    }
}
