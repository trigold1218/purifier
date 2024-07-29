<?php

use Trigold\Purifier\Purifier;
use Hyperf\Context\ApplicationContext;

if (!function_exists('clean')) {
    function clean($dirty, $config = null)
    {
        return ApplicationContext::getContainer()->get(Purifier::class)->clean($dirty, $config);
    }
}
