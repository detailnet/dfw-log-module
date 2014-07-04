<?php

namespace Detail\Log\Service;

use Psr\Log\LogLevel;

trait LoggerAwareTrait
{
    use \Psr\Log\LoggerAwareTrait;

    private $loggerPrefix = null;

    protected function log($message, $level = LogLevel::DEBUG, array $context = array())
    {
        if ($this->logger !== null) {
            $this->logger->log($level, $this->getLoggerPrefix() . $message, $context);
        }
    }

    private function setLoggerPrefix($prefix)
    {
        $this->loggerPrefix = $prefix;
    }

    private function getLoggerPrefix()
    {
        if ($this->loggerPrefix === null) {
            $classNameParts = explode('\\', get_class($this));

            $this->loggerPrefix = sprintf('[%s] ', $classNameParts[count($classNameParts) - 1]);
        }

        return $this->loggerPrefix;
    }
}
