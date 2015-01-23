<?php

namespace DetailTest\Log\Options;

class ModuleOptionsTest extends OptionsTestCase
{
    /**
     * @var \Detail\Log\Options\ModuleOptions
     */
    protected $options;

    protected function setUp()
    {
        $this->options = $this->getOptions(
            'Detail\Log\Options\ModuleOptions',
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
