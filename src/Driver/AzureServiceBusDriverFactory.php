<?php

declare(strict_types=1);

namespace Enqueue\AzureServiceBus\Driver;

use Enqueue\AzureServiceBus\AzureServiceBusConnectionFactory;
use Enqueue\Client\Resources;
use Enqueue\ConnectionFactoryFactoryInterface;
use Interop\Queue\ConnectionFactory;

class AzureServiceBusDriverFactory implements ConnectionFactoryFactoryInterface
{
    /**
     * @inheritDoc
     **/
    public function create($config): ConnectionFactory
    {
        Resources::addDriver(AzureServiceBusDriver::class, ['azure'], [], ['assoconnect/phpenqueue-azure-service-bus']);
        $azureKey = $config['connection_string'];
        return new AzureServiceBusConnectionFactory($azureKey);
    }
}
