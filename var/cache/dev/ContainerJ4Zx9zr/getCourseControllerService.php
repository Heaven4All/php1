<?php

namespace ContainerJ4Zx9zr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCourseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CourseController' shared autowired service.
     *
     * @return \App\Controller\CourseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/AppController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CourseController.php';

        return $container->services['App\\Controller\\CourseController'] = new \App\Controller\CourseController(($container->privates['App\\Service\\ResponseFactory'] ?? $container->getResponseFactoryService()), ($container->privates['App\\Service\\State'] ?? $container->getStateService()), ($container->privates['App\\Service\\Breadcrumb'] ?? $container->getBreadcrumbService()), ($container->privates['App\\Service\\Contentful'] ?? $container->getContentfulService()), ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
