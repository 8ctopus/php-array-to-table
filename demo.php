<?php

declare(strict_types=1);

use Oct8pus\ArrayToTable\ArrayToTable;

require_once __DIR__ . '/vendor/autoload.php';

echo <<<'HTML'
<doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-dark text-white">
<div class="container">

HTML;

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

$options = [
    'table-classes' => 'table-dark table-striped table-bordered table-hover',
];

echo (new ArrayToTable($data, $options))
    ->render();

echo <<<'HTML'
</div>
</body>
</html>

HTML;
