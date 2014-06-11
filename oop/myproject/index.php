<?php

spl_autoload_register(function ($classname) {
    require __DIR__ . "/lib/" 
        . str_replace("\\", DIRECTORY_SEPARATOR, $classname)
        . ".php";
});

$myclass = new \MyApp\MyClass();
var_dump($myclass);
