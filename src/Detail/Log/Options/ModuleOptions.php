<?php

namespace Detail\Log\Options;

class ModuleOptions extends AbstractOptions
{
    protected $logger;

    /**
     * @return mixed
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param mixed $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }
}
