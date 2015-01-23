<?php

namespace Detail\Log\Options;

use Detail\Core\Options\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $logger;

    /**
     * @return string
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param string $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }
}
