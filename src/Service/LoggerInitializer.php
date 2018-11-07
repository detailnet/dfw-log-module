<?php

namespace Detail\Log\Service;

use Interop\Container\ContainerInterface;

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;

use Zend\ServiceManager\Initializer\InitializerInterface;

use Detail\Log\Options\ModuleOptions;

class LoggerInitializer implements
    InitializerInterface
{
    /**
     * Initialize the given instance
     *
     * @param ContainerInterface $container
     * @param object $instance
     * @return void
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof LoggerAwareInterface) {
            /** @var ModuleOptions $moduleOptions */
            $moduleOptions = $container->get(ModuleOptions::CLASS);

            /** @var LoggerInterface $logger */
            $logger = $container->get($moduleOptions->getLogger());

            $instance->setLogger($logger);
        }
    }
}
