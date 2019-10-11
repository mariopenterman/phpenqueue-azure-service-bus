<?php

namespace Enqueue\AzureSserviceBus\Tests;

use Enqueue\AzureServiceBus\AzureServiceBusConnectionFactory;
use Enqueue\Test\ClassExtensionTrait;
use Interop\Queue\ConnectionFactory;
use PHPUnit\Framework\TestCase;

class AzureServiceBusConnectionFactoryTest extends TestCase
{
    use ClassExtensionTrait;

    public function testShouldImplementConnectionFactoryInterface()
    {
        $this->assertClassImplements(ConnectionFactory::class, AzureServiceBusConnectionFactory::class);
    }
}
