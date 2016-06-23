<?php

namespace TicketingAdmin\Service\Factory;

use PaylineModule\Service\PaylineService;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use Payline\PaylineSDK;

class ExtractorFactory implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;

    /**
     * @var array $config
     */
    private $config;

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $this->setServiceLocator($serviceLocator);

        return new PaylineService($this->getConfig(), $this->getClient());
    }
    
    private function getConfig()
    {
        if(is_array($this->config))
        {
            return $this->config;
        }

        return $this->config = $this->getServicelocator()->get('config')['payline'];
    }

    private function getClient()
    {
        $config = $this->getConfig();

        return new PaylineSDK(
            $config['merchant_id'],
            $config['access_key'],
            $config['proxy_host'],
            $config['proxy_port'],
            $config['proxy_login'],
            $config['proxy_password'],
            $config['environment'],
            $config['log_path']
        );
    }
}