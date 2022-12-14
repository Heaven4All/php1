<?php

namespace ContainerJ4Zx9zr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotFoundControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NotFoundController' shared autowired service.
     *
     * @return \App\Controller\NotFoundController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/AppController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/NotFoundController.php';

        return $container->services['App\\Controller\\NotFoundController'] = new \App\Controller\NotFoundController(($container->privates['App\\Service\\ResponseFactory'] ?? $container->getResponseFactoryService()), ($container->privates['App\\Service\\State'] ?? $container->getStateService()), ($container->privates['App\\Service\\Breadcrumb'] ?? $container->getBreadcrumbService()), ($container->privates['App\\Service\\Contentful'] ?? $container->getContentfulService()), ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
