<?php

namespace DetailTest\Log;

use PHPUnit_Framework_TestCase as TestCase;

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

    public function testModuleProvidesAutoloaderConfig()
    {
        $config = $this->module->getAutoloaderConfig();

        $this->assertTrue(is_array($config));

        $this->assertArrayHasKey('Zend\Loader\StandardAutoloader', $config);
        $this->assertArrayHasKey('namespaces', $config['Zend\Loader\StandardAutoloader']);
        $this->assertArrayHasKey('Detail\Log', $config['Zend\Loader\StandardAutoloader']['namespaces']);
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

    public function testModuleProvidesControllerConfig()
    {
        $config = $this->module->getControllerConfig();

        $this->assertTrue(is_array($config));
    }

    public function testModuleProvidesServiceConfig()
    {
        $config = $this->module->getServiceConfig();

        $this->assertTrue(is_array($config));
    }
}
