<?php

namespace PaylineModule\Utils;

abstract class Action {
    const AUTHORIZATION = 100;
    const AUTHORIZATION_VALIDATION = 101;
    const VALIDATION = 201;
    const CAPTURE = 204;
    const REFUND = 421;
}