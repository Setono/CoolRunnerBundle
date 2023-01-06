<?php

declare(strict_types=1);

namespace Setono\CoolRunnerBundle;

use Setono\CoolRunnerBundle\DependencyInjection\SetonoCoolRunnerExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SetonoCoolRunnerBundle extends Bundle
{
    public function getContainerExtension(): SetonoCoolRunnerExtension
    {
        return new SetonoCoolRunnerExtension();
    }
}
