<?php

declare(strict_types=1);

namespace Trigold\Purifier\Casts;

trait WithConfig
{
    protected null|array|string $config;

    public function __construct($config = null)
    {
        $this->config = $config;
    }
}
