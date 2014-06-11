<?php

require "vendor/autoload.php";

$logger = new \Monolog\Logger("log");
$logger->pushHandler(new \Monolog\Handler\ErrorLogHandler());

$logger->addInfo("Something happened");
