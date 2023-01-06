<?php

declare(strict_types=1);

namespace Setono\CoolRunnerBundle\DependencyInjection;

use CuyZ\Valinor\Cache\FileWatchingCache;
use Psr\Cache\CacheItemPoolInterface;
use Setono\CoolRunner\Client\Client;
use Symfony\Component\Cache\Psr16Cache;

final class ClientConfigurator
{
    private CacheItemPoolInterface $cache;

    private bool $debug;

    public function __construct(CacheItemPoolInterface $cache, bool $debug)
    {
        $this->cache = $cache;
        $this->debug = $debug;
    }

    public function configure(Client $client): void
    {
        $cache = new Psr16Cache($this->cache);

        if ($this->debug) {
            $cache = new FileWatchingCache($cache);
        }

        $client->getMapperBuilder()->withCache($cache);
    }
}
