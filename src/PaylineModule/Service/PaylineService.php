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
     * @var \Zend\View\Helper\Url
     */
    private $url;

    /**
     * PaylineService constructor.
     *
     * @param $config
     * @param $client
     */
    public function __construct($config, $client, $url)
    {
        $this->client = $client;
        $this->config = $config;
        $this->url = $url;
    }

    private function getClient()
    {
        return $this->client;
    }

    private function url($name, $params, $options)
    {
        $url = $this->url;
        return $url($name, $params, $options);
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

        if(is_array($returnURL = $this->config['returnURL']))
        {
            $this->config['returnURL'] = $this->url(
                $returnURL['route'],
                $returnURL['params'],
                ['force_canonical' => true]
            );
        }

        if(is_array($cancelURL = $this->config['cancelURL']))
        {
            $this->config['cancelURL'] = $this->url(
                $cancelURL['route'],
                $cancelURL['params'],
                ['force_canonical' => true]
            );
        }

        if(is_array($notificationURL = $this->config['notificationURL']))
        {
            $this->config['notificationURL'] = $this->url(
                $notificationURL['route'],
                $notificationURL['params'],
                ['force_canonical' => true]
            );
        }

        $params = array_replace_recursive([
            'returnURL' => $this->config['returnURL'],
            'cancelURL' => $this->config['cancelURL'],
            'notificationURL' => $this->config['notificationURL'],
            'payment' => [
                'contractNumber' => $this->config['contractNumber']
            ],
            'order'        => [
                'date'     => (isset($params['order']['date']) ? $params['order']['date'] : (new \DateTime())->format('d/m/Y H:i') ),
                'amount'   => $params['payment']['amount'],
                'currency' => $params['payment']['currency'],
            ]
        ], $params);

        return $this->getClient()->doWebPayment($params);
    }

    public function getWebPaymentDetails($token)
    {
        return $this->getClient()->getWebPaymentDetails(['token' => $token]);
    }
}