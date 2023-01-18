<?php

declare(strict_types=1);

namespace Indgy\Config;

use Adbar\Dot;

class Config extends Dot implements ConfigInterface
{
    public function __construct(String $folder, ?String $overrides="")
    {
        // load all config from root configs folder
        $config = [];
        
        // parse root folder configs
        foreach (glob("$folder/*.php") as $file) {
            $key = basename(str_replace(".php", "", $file));
            $config[$key] = require($file);
        };
        
        // parse override folder configs
        if ($overrides) {
            // load all config from overrides folder
            foreach (glob("$folder/$overrides/*.php") as $file) {
                $key = basename(str_replace(".php", "", $file));
                $config[$key] = require($file);
            };
        }

        parent::__construct($config);
    }
}
