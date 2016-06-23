<?php

namespace PaylineModule\Service;

class PaylineService
{

    /**
     * @var \Payline\PaylineSDK $client
     */
    private $client;

    /**
     * @var array $config
     */
    private $config;

    /**
     * PaylineService constructor.
     *
     * @param $config
     * @param $client
     */
    public function __construct($config, $client)
    {
        $this->client = $client;
        $this->config = $config;
    }

    private function getClient()
    {
        return $this->client;
    }

    /**
     * Execute web payment and catch response
     *
     * @param array $params
     *
     * @return array
     */
    public function doWebPayment(array $params)
    {
        if($config[''])

        return $this->getClient()->doWebPayment($params);
    }

}