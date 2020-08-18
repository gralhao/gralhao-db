<p align="center">
  <a href="https://github.com/gralhao/gralhao" rel="noopener">
    <img src="https://github.com/gralhao/gralhao/raw/master/docs/assets/logo.svg" alt="Gralhao logo">
  </a>
</p>

<h3 align="center">gralhao/gralhao-db</h3>

<div align="center">

[![Latest Stable Version](https://img.shields.io/packagist/v/gralhao/gralhao-db.svg?style=flat-square)](https://packagist.org/packages/gralhao/gralhao-db)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg)](https://php.net/)
[![Build Status](https://travis-ci.com/gralhao/gralhao-db.svg?branch=master)](https://travis-ci.com/gralhao/gralhao-db)
[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![License](https://img.shields.io/badge/license-BSD-blue.svg)](/LICENSE)

</div>

---

<div align="center">
  <p>A Gralhao Database Module</p>
</div>

## Index

- [About](#about)
- [Getting Started](#getting_started)
- [Usage](#usage)
- [Built Using](#built_using)
- [Authors](#authors)
- [Acknowledgments](#acknowledgement)

## About <a name = "about"></a>
This module is an implementation of [Phalcon PDO Adapter](https://docs.phalcon.io/4.0/en/api/phalcon_db).

## Getting Started <a name = "getting_started"></a>

### Prerequisites
PHP ^7.4, Phalcon ^4.x, Gralhao ^1.x

### Usage <a name="usage"></a>
Installing
```bash
composer require gralhao/gralhao-db
```
In ``application.config.php`` just add:
```php
<?php

return [
    'modules' => [
        'Gralhao\Db',
    ],
    'database' => [
        'adapter'    => 'Mysql',
        'host'       => 'localhost',
        'username'   => 'user',
        'password'   => 'p@ss',
        'dbname'     => 'user_database',
        'charset'    => 'utf8',
    ],
];

```

## Built Using <a name = "built_using"></a>
- [Gralhao](https://github.com/gralhao/gralhao)
- [Phalcon](https://phalcon.io/)

## Authors <a name = "authors"></a>
- [@mocallu](https://github.com/mocallu) - Idea & Initial work

See also the list of [contributors](https://github.com/gralhao/gralhao-db/contributors) who participated in this project.

## Acknowledgements <a name = "acknowledgement"></a>
- [Phalcon Project](https://phalcon.io)
- [A.K.A. Gralhao](https://en.wikipedia.org/wiki/Red-throated_caracara)
