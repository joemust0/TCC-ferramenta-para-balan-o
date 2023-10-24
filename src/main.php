<?php
include_once __DIR__ ."/../vendor/autoload.php";

use App\SystemServices\MonologFactory;

$logger = MonologFactory::getInstance();
$logger->info("logger relevante");
$logger->debug("Arquivo main.php rodando. . . ");
$logger->error("um erro de exemplo. . .");