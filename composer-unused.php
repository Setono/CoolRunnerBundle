<?php

declare(strict_types=1);

use ComposerUnused\ComposerUnused\Configuration\Configuration;
use ComposerUnused\ComposerUnused\Configuration\NamedFilter;

return static function (Configuration $config): Configuration {
    return $config
        ->addNamedFilter(NamedFilter::fromString('setono/coolrunner-php-sdk'))
        ->addNamedFilter(NamedFilter::fromString('symfony/http-client')) // Used as the HTTP client for the CoolRunner PHP SDK
    ;
};
