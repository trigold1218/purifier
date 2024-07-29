<?php

declare(strict_types=1);

namespace Trigold\Purifier\Casts;

use Hyperf\Database\Model\Model;
use Hyperf\Contract\CastsAttributes;
use function Trigold\Purifier\clean;

class CleanHtml implements CastsAttributes
{
    use WithConfig;

    /**
     * Clean the HTML when casting the given value.
     *
     * @param  Model   $model
     * @param  string  $key
     * @param  mixed   $value
     * @param  array   $attributes
     *
     * @return mixed
     */
    public function get($model, string $key, $value, array $attributes): mixed
    {
        return clean($value, $this->config);
    }

    /**
     * Prepare the given value for storage by cleaning the HTML.
     *
     * @param Model $model
     * @param mixed $value
     */
    public function set($model, string $key, $value, array $attributes): array|string
    {
        return clean($value, $this->config);
    }
}
