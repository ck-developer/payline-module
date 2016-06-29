<?php

/*
 * This file is part of the Payline Module for Zend Framework 2.
 *
 * (c) Claude Khedhiri <claude@khedhiri.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PaylineModule\Service;

class PaylineService
{

    /**
     * @var \Payline\PaylineSDK
     */
    private $client;

    /**
     * @var array
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
        if (is_array($returnURL = $this->config['returnURL'])) {
            $this->config['returnURL'] = $this->url(
                $returnURL['route'],
                $returnURL['params'],
                array('force_canonical' => true)
            );
        }

        if (is_array($cancelURL = $this->config['cancelURL'])) {
            $this->config['cancelURL'] = $this->url(
                $cancelURL['route'],
                $cancelURL['params'],
                array('force_canonical' => true)
            );
        }

        if (is_array($notificationURL = $this->config['notificationURL'])) {
            $this->config['notificationURL'] = $this->url(
                $notificationURL['route'],
                $notificationURL['params'],
                array('force_canonical' => true)
            );
        }

        $params = array_replace_recursive(array(
            'returnURL' => $this->config['returnURL'],
            'cancelURL' => $this->config['cancelURL'],
            'notificationURL' => $this->config['notificationURL'],
            'payment' => array(
                'contractNumber' => $this->config['contractNumber']
            ),
            'order'        => array(
                'date'     => (isset($params['order']['date']) ? $params['order']['date'] : (new \DateTime())->format('d/m/Y H:i')),
                'amount'   => $params['payment']['amount'],
                'currency' => $params['payment']['currency'],
            )
        ), $params);

        return $this->getClient()->doWebPayment($params);
    }

    public function getWebPaymentDetails($token)
    {
        return $this->getClient()->getWebPaymentDetails(array('token' => $token));
    }
}
