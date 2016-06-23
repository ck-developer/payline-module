<?php

namespace PaylineModuleTest;

use PHPUnit_Framework_TestCase;

class TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @var PHPUnit_Framework_MockObject_MockObject|\Zend\Mvc\Application
     */
    private $application;

    /**
     * @var PHPUnit_Framework_MockObject_MockObject|\Zend\ServiceManager\ServiceManager
     */
    private $serviceManager;

    public function setUp()
    {
        $this->application    = $this->getMock('Zend\Mvc\Application', array(), array(), '', false);
        $this->serviceManager = $this->getMock('Zend\ServiceManager\ServiceManager');
    }
}
