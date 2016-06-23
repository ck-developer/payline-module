<?php

namespace PaylineModule\Utils;

abstract class Payment
{
    const CASH = 'CPT';
    const DEFERRED = 'DIF';
    const SEVERAL_INSTALMENTS = 'NX';
    const RECURRING = 'REC';
}