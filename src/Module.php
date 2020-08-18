<?php

declare(strict_types=1);

namespace Gralhao\Db;

use Gralhao\Db\Providers\DbServiceProvider;

class Module extends \Gralhao\Module
{
    public function getConfig(): array
    {
        return [
            'service_providers' => [
                DbServiceProvider::class,
            ],
        ];
    }
}
