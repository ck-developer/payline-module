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

abstract class Cycle
{
    const DAILY = 10;
    const WEEKLY = 20;
    const BIMONTHLY = 30;
    const MONTHLY = 40;
    const QUARTERLY = 60;
    const SEMIANNUAL = 70;
    const ANNUAL = 80;
    const BIANNUAL = 90;
}
