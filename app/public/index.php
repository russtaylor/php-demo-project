<?php

require '../bootstrap.php';

$logFile = '../log/test.log';

$config = ['settings' => [
    'addContentLengthHeader' => false,
]];

$app = new \Slim\App($config);

$app->get('/', function($request, $response, $args) {
    return $response->write("Hello, you! I'm a brand spanking new app!");
});

$app->run();