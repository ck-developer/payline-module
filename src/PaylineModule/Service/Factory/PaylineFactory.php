<?php

namespace PaylineModule\Service\Factory;

use PaylineModule\Service\PaylineService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Payline\PaylineSDK;

class PaylineFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config')['payline'];

        /** @var \Zend\View\Helper\Url $url */
        $url = $serviceLocator->get('ViewHelperManager')->get('url');

        if (!file_exists($config['logPath']))
        {
            mkdir($config['logPath']);
            chmod($config['logPath'], 0777);
        }

        $payline = new PaylineSDK(
            $config['merchantId'],
            $config['accessKey'],
            $config['proxyHost'],
            $config['proxyPort'],
            $config['proxyLogin'],
            $config['proxyPassword'],
            $config['environment'],
            $config['logPath']
        );

        return new PaylineService($config, $payline, $url);
    }
}