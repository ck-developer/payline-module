PaylineModule
=============

Based on Payline SDK, PaylineModule allows you to use it in a zend Framework 2 service. Payline is a way to do credit card payments online.

## Installation ##

This is installable via [Composer](https://getcomposer.org/) as [voxees/payline-module](https://packagist.org/packages/voxees/payline-module).

## Usage ##

### Basic Usage ###

First, Copy the payline.local.php.dist in your application config and set the file with your own configuration.
Then, you can get the payline service with the following code :

```php
$this->getServiceLocator()->get('payline');
```

#### Do a web payment ####

```php
       $uri = $this->getRequest()->getUri();
       $base = sprintf('%s://%s', $uri->getScheme(), $uri->getHost());
       $response = $this->getServiceLocator->get('payline')->doWebPayment([
           'returnURL'    => $base . $this->url()->fromRoute('home'),
            'cancelURL'    => $base . $this->url()->fromRoute('home'),
            'payment'      => [
                'amount'         => 100,
                'action'         => 101,
                'currency'       => 978,
                'mode'           => PaylineService::CASH_PAYMENT,
                'contractNumber' => $this->getServiceLocator()->get('config')['payline']['contractNumber']
            ],
            'order'        => [
                'amount'   => 100,
                'ref'      => 1,
                'currency' => 978
            ]
        ]);
```