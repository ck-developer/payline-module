PaylineModule
=============
[![Build Status](https://travis-ci.org/ck-developer/payline-module.svg?branch=master)](https://travis-ci.org/ck-developer/payline-module) [![Latest Stable Version](https://poser.pugx.org/ck-developer/payline-module/v/stable)](https://packagist.org/packages/ck-developer/payline-module) [![Total Downloads](https://poser.pugx.org/ck-developer/payline-module/downloads)](https://packagist.org/packages/ck-developer/payline-module) [![Latest Unstable Version](https://poser.pugx.org/ck-developer/payline-module/v/unstable)](https://packagist.org/packages/ck-developer/payline-module) [![License](https://poser.pugx.org/ck-developer/payline-module/license)](https://packagist.org/packages/ck-developer/payline-module)


Based on Payline SDK, PaylineModule allows you to use it in a zend Framework 2 service. Payline is a way to do credit card payments online.

## Installation

Installation of DoctrineModule uses composer. For composer documentation, please refer to
[getcomposer.org](http://getcomposer.org/).

```sh
php composer.phar require ck-developer/payline-module
```

Then add `PaylineModule` to your `config/application.config.php`

## Usage ##

#### Configuration ####

First, Copy the payline.local.php.dist in your application config and set the file with your own configuration.
Then, you can get the payline service with the following code :

#### Basic Usage ####

```php
       use PaylineModule\Utils\Action;
       use PaylineModule\Utils\Currency;
       use PaylineModule\Utils\Payment;

       $response = $this->getServiceLocator->get('payline')->doWebPayment([
            'payment'      => [
                'amount'         => 100,
                'action'         => Action::AUTHORIZATION_VALIDATION,
                'currency'       => Currency::EURO,
                'mode'           => Payment::CASH,
            ],
            'order'        => [
                'ref'      => 1,
            ]
        ]);
```
