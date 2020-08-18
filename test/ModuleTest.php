<?php

declare(strict_types=1);

namespace GralhaoDb\Test;

class ModuleTest extends \Gralhao\Test\TestCase
{
    public function testReturnsAPdoClassException(): void
    {
        $this->expectException(\PDOException::class);
        $bootstrap = $this->bootstrap();
        $bootstrap->setConfig([
            'modules' => [
                'Gralhao\Db'
            ],
            'database' => [
                'adapter' => 'Mysql',
            ],
        ]);
        $app = $this->getApp();
        $app->notFound(function () use ($app) {
            $app->response->setStatusCode(404);
            $app->response->send();
        });
        $bootstrap->init();
        $app->di->get('db');
    }
}
