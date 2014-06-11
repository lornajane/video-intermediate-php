function getValues() {
    // totally trivial example
    yield "Apple";
    yield "Ball";
    yield "Cat";
}

$stuff = getValues();
foreach($stuff as $thing) {
    echo $thing . "\n";
}
