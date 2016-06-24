<?php

namespace PaylineModule\Utils;

abstract class Payment
{
    const CASH = 'CPT';
    const DEFERRED = 'DIF';
    const N_TIMES = 'NX';
    const RECURRING = 'REC';
}