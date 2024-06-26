<?php

namespace ContainerKqDnhx3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CCjwZaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c_CjwZa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c_CjwZa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'starshipRepository' => ['privates', 'App\\Repository\\StarshipRepository', 'getStarshipRepositoryService', true],
        ], [
            'starshipRepository' => 'App\\Repository\\StarshipRepository',
        ]);
    }
}
