<?php

require_once 'dbHandler.php';
require './libs/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

require_once '../models/juntas.php';
require_once '../models/contenido.php';
//require_once '../validar.php';
require_once '../vendor/autoload.php';

function echoResponse($status_code, $response) {
    $app = \Slim\Slim::getInstance();
    // Http response code
    $app->status($status_code);

    // setting response content type to json
    $app->contentType('application/json');

    echo json_encode($response);
}

$app->run();
?>