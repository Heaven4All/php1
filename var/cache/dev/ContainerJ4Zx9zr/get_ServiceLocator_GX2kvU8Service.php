<?php

namespace ContainerJ4Zx9zr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GX2kvU8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GX2kvU8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GX2kvU8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formFactory' => ['services', 'form.factory', 'getForm_FactoryService', true],
        ], [
            'formFactory' => '?',
        ]);
    }
}
