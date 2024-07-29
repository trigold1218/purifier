<?php

declare(strict_types=1);

namespace Trigold\Purifier;

class ConfigProvider
{
    public function __invoke(): array
    {
        defined('BASE_PATH') or define('BASE_PATH', '');

        return [
            'dependencies' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'commands' => [],
            'listeners' => [],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'config file of purifier.',
                    'source' => __DIR__ . '/../publish/purifier.php',
                    'destination' => BASE_PATH . '/config/autoload/purifier.php',
                ],
            ],
        ];
    }
}
