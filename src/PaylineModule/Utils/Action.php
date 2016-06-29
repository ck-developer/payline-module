<?php

/*
 * This file is part of the Payline Module for Zend Framework 2.
 *
 * (c) Claude Khedhiri <claude@khedhiri.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PaylineModule\Utils;

abstract class Action
{
    const AUTHORIZATION = 100;
    const AUTHORIZATION_VALIDATION = 101;
    const VALIDATION = 201;
    const CAPTURE = 204;
    const REFUND = 421;
}
