<?php

declare(strict_types=1);

namespace GralhaoDb\Test;

class ModuleTest extends \Gralhao\Test\TestCase
{
    public function testReturnsAPdoClassException(): void
    {
        $this->expectException(\PDOException::class);
        $this->bootstrap()->setConfig([
            'modules' => [
                'Gralhao\Db'
            ],
            'database' => [
                'adapter' => 'Mysql',
            ],
        ])->init();
        $container = $this->getApp()->di;
        $container->get('db');
    }
}
