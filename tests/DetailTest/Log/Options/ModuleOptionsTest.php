<?php

namespace DetailTest\Log\Options;

use Detail\Log\Options\ModuleOptions;

class ModuleOptionsTest extends OptionsTestCase
{
    /**
     * @var ModuleOptions
     */
    protected $options;

    protected function setUp()
    {
        $this->options = $this->getOptions(
            ModuleOptions::CLASS,
            array(
                'getLogger',
                'setLogger',
            )
        );
    }

    public function testLoggerCanBeSet()
    {
        $logger = 'Some\Logger\Class';

        $this->assertNull($this->options->getLogger());

        $this->options->setLogger($logger);

        $this->assertEquals($logger, $this->options->getLogger());
    }
}
