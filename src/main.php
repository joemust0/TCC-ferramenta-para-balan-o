<?php

include_once __DIR__ ."/../vendor/autoload.php";

use App\SystemServices\MonologFactory;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Selective\BasePath\BasePathMiddleware;
use Slim\Factory\AppFactory;

// $logger = MonologFactory::getInstance();
// $logger->info("logger relevante");
// $logger->debug("Arquivo main.php rodando. . . ");
// $logger->error("um erro de exemplo. . .");




MonologFactory::getInstance()->debug("main executado....");

$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->add(new BasePathMiddleware($app));
$app->addErrorMiddleware(true, true, true);


$app->get('/', function (Request $request, Response $response) {
  $response->getBody()->write("Hello Word!");
  return $response;
});

$app->get('/inserirusuarios', function (Request $request, Response $response) {
    $response->getBody()->write("Hello Word!");
    return $response;
});

$app->run();