<?php
namespace Trigold\Purifier;

use Closure;
use Hyperf\Context\ApplicationContext;

if (!function_exists('clean')) {
    function clean($dirty, $config = null, ?Closure $postCreateConfigHook = null)
    {
        return ApplicationContext::getContainer()->get(Purifier::class)->clean($dirty, $config, $postCreateConfigHook);
    }
}
