<?php

namespace ContainerXxLNCZy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PXhibY6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pXhibY6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pXhibY6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ErrorController::__invoke' => ['privates', '.service_locator.mExgntV', 'get_ServiceLocator_MExgntVService', true],
            'App\\Controller\\SettingsController::__invoke' => ['privates', '.service_locator.GX2kvU8', 'get_ServiceLocator_GX2kvU8Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ErrorController:__invoke' => ['privates', '.service_locator.mExgntV', 'get_ServiceLocator_MExgntVService', true],
            'App\\Controller\\ErrorController' => ['privates', '.service_locator.mExgntV', 'get_ServiceLocator_MExgntVService', true],
            'App\\Controller\\SettingsController:__invoke' => ['privates', '.service_locator.GX2kvU8', 'get_ServiceLocator_GX2kvU8Service', true],
            'App\\Controller\\SettingsController' => ['privates', '.service_locator.GX2kvU8', 'get_ServiceLocator_GX2kvU8Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ErrorController::__invoke' => '?',
            'App\\Controller\\SettingsController::__invoke' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ErrorController:__invoke' => '?',
            'App\\Controller\\ErrorController' => '?',
            'App\\Controller\\SettingsController:__invoke' => '?',
            'App\\Controller\\SettingsController' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}