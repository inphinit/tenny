<?php
require_once 'teeny.php';

$app = new Teeny;

$app->action('POST', '/foo/bar', function () {
    echo 'Hello foo bar!';
});

$app->action('PUT', '/cat', function () {
    echo 'Olá foo bar!';
});

$app->action('GET', '/', function () {
    echo 'Hello world!';
});

$app->action('GET', '/include', 'foo.php');

$app->handlerCodes(array(404, 405), function ($code) {
    echo 'Custom page error ', $code;
});

$app->exec();
