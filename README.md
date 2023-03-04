# php array to bootstrap table

Convert php array to [Twitter bootstrap](https://getbootstrap.com/) 5 table.

[![Latest Stable Version](http://poser.pugx.org/8ctopus/array-to-table/v)](https://packagist.org/packages/8ctopus/array-to-table) [![Total Downloads](http://poser.pugx.org/8ctopus/array-to-table/downloads)](https://packagist.org/packages/8ctopus/array-to-table) [![License](http://poser.pugx.org/8ctopus/array-to-table/license)](https://packagist.org/packages/8ctopus/array-to-table) [![PHP Version Require](http://poser.pugx.org/8ctopus/array-to-table/require/php)](https://packagist.org/packages/8ctopus/array-to-table)

## install and demo

```sh
composer require 8ctopus/array-to-table
```

```php
<?php

declare(strict_types=1);

use Oct8pus\ArrayToTable\ArrayToTable;

require_once __DIR__ . '/vendor/autoload.php';

$data = [
    [
        'id' => 1,
        'firstName' => 'John',
        'transactionId' => 'A1-2019',
        'refunded' => 0,
        'purchaseDate' => '2019-12-01 00:00:00',
        'expiryDate' => '2020-12-01 00:00:00',
    ], [
        'id' => 2,
        'firstName' => 'Mark',
        'transactionId' => 'A1-2020',
        'refunded' => 0,
        'purchaseDate' => '2020-12-05 00:00:00',
        'expiryDate' => '2021-12-05 00:00:00',
    ], [
        'id' => 3,
        'firstName' => 'Joe',
        'transactionId' => 'A1-2022',
        'refunded' => 1,
        'purchaseDate' => '2022-12-05 00:00:00',
        'expiryDate' => '2023-12-05 00:00:00',
    ],
];

echo (new ArrayToTable($data))
    ->render();
```

<table class="table">
<thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">firstName</th>
    <th scope="col">transactionId</th>
    <th scope="col">refunded</th>
    <th scope="col">purchaseDate</th>
    <th scope="col">expiryDate</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>1</td>
    <td>John</td>
    <td>A1-2019</td>
    <td>0</td>
    <td>2019-12-01 00:00:00</td>
    <td>2020-12-01 00:00:00</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Mark</td>
    <td>A1-2020</td>
    <td>0</td>
    <td>2020-12-05 00:00:00</td>
    <td>2021-12-05 00:00:00</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Joe</td>
    <td>A1-2022</td>
    <td>1</td>
    <td>2022-12-05 00:00:00</td>
    <td>2023-12-05 00:00:00</td>
  </tr>
</tbody>
</table>

You can also check the example `demo.php`.

## tests

    composer test

## clean code

    composer fix(-risky)
