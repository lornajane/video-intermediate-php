<?php

spl_autoload_register(function ($classname) {
    require $classname . ".php";
});

$collection = new ShapeCollection();
echo "I have " . count($collection) . " shapes\n";

function output(Drawable $thing) {
    echo $thing->draw() . "\n";
}

output(new Shape());
output(new Product());
output(new Advert());
