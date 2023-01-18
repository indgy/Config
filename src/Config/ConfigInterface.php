<?php

declare(strict_types=1);

namespace Indgy\Config;

/**
 * ConfigInterface defines the minimum methods required
 *
 * @package Config
 */
interface ConfigInterface
{
    /**
     * Returns the value of the named $key or the value of $default
     *
     * @param String $key The key to return
     * @param Mixed $default The value to return if key is not set
     * @return Mixed
     */
    public function get(String $key, $default=null);
}
