<?php

namespace Detail\Log\Factory\Options;

use Interop\Container\ContainerInterface;

use Zend\ServiceManager\Factory\FactoryInterface;

use Detail\Log\Exception\ConfigException;
use Detail\Log\Options\ModuleOptions;

class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * Create ModuleOptions
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return ModuleOptions
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('Config');

        if (!isset($config['detail_log'])) {
            throw new ConfigException('Config for Detail\Log is not set');
        }

        return new ModuleOptions($config['detail_log']);
    }
}
