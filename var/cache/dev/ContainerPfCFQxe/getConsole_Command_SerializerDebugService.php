<?php

namespace ContainerPfCFQxe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_SerializerDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.serializer_debug' shared service.
     *
     * @return \Symfony\Component\Serializer\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.serializer_debug'] = $instance = new \Symfony\Component\Serializer\Command\DebugCommand(($container->privates['serializer.mapping.class_metadata_factory'] ?? self::getSerializer_Mapping_ClassMetadataFactoryService($container)));

        $instance->setName('debug:serializer');
        $instance->setDescription('Display serialization information for classes');

        return $instance;
    }
}
