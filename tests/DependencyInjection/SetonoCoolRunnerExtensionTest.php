<?php

declare(strict_types=1);

namespace Setono\CoolRunnerBundle\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Setono\CoolRunnerBundle\DependencyInjection\SetonoCoolRunnerExtension;

final class SetonoCoolRunnerExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions(): array
    {
        return [
            new SetonoCoolRunnerExtension(),
        ];
    }

    /**
     * @test
     */
    public function it_has_parameters_set(): void
    {
        $this->load([
            'username' => 'user',
            'token' => 't0k3n',
        ]);

        $this->assertContainerBuilderHasParameter('setono_coolrunner.username', 'user');
        $this->assertContainerBuilderHasParameter('setono_coolrunner.token', 't0k3n');
    }
}
