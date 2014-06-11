namespace MyApp;

function decorate($string) {
    return "** " . $string . " **";
}

// elsewhere in the application
$message = "hai";
$decorated = \MyApp\decorate($message);

echo $decorated; // ** hai **
