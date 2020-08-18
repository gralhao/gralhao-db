<?php

declare(strict_types=1);

namespace Gralhao\Db\Providers;

use Phalcon\Di\DiInterface;
use Phalcon\Di\ServiceProviderInterface;

class DbServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $container): void
    {
        $config = $container->getShared('config')->get('database')->toArray();
        if ($config) {
            $container->setShared('db', function () use ($config) {
                $dbClass = 'Phalcon\Db\Adapter\Pdo\\' . $config['adapter'];
                unset($config['adapter']);
                return new $dbClass($config);
            });
        }
    }
}
