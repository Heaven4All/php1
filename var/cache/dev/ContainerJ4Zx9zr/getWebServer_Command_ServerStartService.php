<?php

namespace ContainerJ4Zx9zr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebServer_Command_ServerStartService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'web_server.command.server_start' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-server-bundle/Command/ServerStartCommand.php';

        $container->privates['web_server.command.server_start'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand((\dirname(__DIR__, 4).'/public'), 'dev', \dirname(__DIR__, 4));

        $instance->setName('server:start');

        return $instance;
    }
}
