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
    }
}
