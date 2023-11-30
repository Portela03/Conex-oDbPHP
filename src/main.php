<?php 

include_once __DIR__ . "/../vendor/autoload.php";


use App\SystemServices\MonologFactory;
use App\persitence\ConnectionFactory;


MonologFactory::getInstance()->info("testando o monolog");

$conn = ConnectionFactory::getConnectionFactory();



echo "teste";

