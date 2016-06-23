<?php

namespace PaylineModuleTest;

use PaylineModule\Module;

class ModuleTest extends TestCase
{

    public function testConfig()
    {
        $module = new Module();

        $config = $module->getConfig();

        $this->assertInternalType('array', $config);
        $this->assertArrayHasKey('service_manager', $config);
        $this->assertArrayHasKey('payline', $config);
        $this->assertArrayHasKey('merchant_id', $config['payline']);
        $this->assertArrayHasKey('access_key', $config['payline']);
        $this->assertArrayHasKey('contractNumber', $config['payline']);
        $this->assertArrayHasKey('proxy_host', $config['payline']);
        $this->assertArrayHasKey('proxy_port', $config['payline']);
        $this->assertArrayHasKey('proxy_login', $config['payline']);
        $this->assertArrayHasKey('proxy_password', $config['payline']);
        $this->assertArrayHasKey('production', $config['payline']);
    }
}
