<?php

declare(strict_types=1);

namespace Indgy\Tests\Config;

use Indgy\Config\Config;
use PHPUnit\Framework\TestCase;


class GetTest extends TestCase
{
    /**
     * @dataProvider configProvider()
     */
    public function testGetMethod($expected, $config, $key, $default)
    {
        $c = new Config($config);

        $this->assertEquals($expected, $c->get($key, $default));
    }

    public function configProvider()
    {
        $config = [
            "api" => [
                "user" => "Alex",
                "pass" => "sEcReT",
            ],
            "theme" => "dark",
        ];

        return [
            "Test found array, without default" => [
                [
                    "user" => "Alex",
                    "pass" => "sEcReT",
                ],
                $config,
                "api",
                null
            ],
            "Test found string, without default" => [
                "dark",
                $config,
                "theme",
                null
            ],
            "Test found string, with unused default" => [
                "dark",
                $config,
                "theme",
                "light"
            ],
            "Test default value" => [
                "medium",
                $config,
                "size",
                "medium"
            ],
            "Test found string nested by dot, without default" => [
                "Alex",
                $config,
                "api.user",
                null
            ],
            "Test not found string nested by dot, with default" => [
                "default",
                $config,
                "api.token",
                "default"
            ],
        ];
    }
}