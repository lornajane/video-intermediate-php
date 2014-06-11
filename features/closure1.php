$message = "hello";
$greet = function ($name) use ($message) {
    echo $message . ' ' . $name;
};

$greet('Daisy'); // hello Daisy

