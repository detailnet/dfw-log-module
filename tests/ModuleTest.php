<?php

namespace DetailTest\Log;

use PHPUnit\Framework\TestCase;

use Detail\Log\Module;

class ModuleTest extends TestCase
{
    /**
     * @var Module
     */
    protected $module;

    protected function setUp()
    {
        $this->module = new Module();
    }

    public function testModuleProvidesConfig()
    {
        $config = $this->module->getConfig();

        $this->assertTrue(is_array($config));
        $this->assertArrayHasKey('detail_log', $config);
        $this->assertTrue(is_array($config['detail_log']));
        $this->assertArrayHasKey('logger', $config['detail_log']);
        $this->assertEquals(
            'Monolog\Logger',
            $config['detail_log']['logger']
        );
    }
}
