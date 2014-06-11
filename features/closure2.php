$message = "hello";
$greet = function ($name) use ($message) {
    echo $message . ' ' . $name;
};
$message = "hey";
$greet('Daisy'); // hello Daisy

