<?php

$db = new PDO('mysql:host=localhost;dbname=films', 
    'username', 'password');
$sql = 'update film set title = :title1 '
    . 'where title = :title2';
$stmt = $db->prepare($sql);
$stmt->execute(array(
    ":title1" => 'Shrek',
    ":title2" => 'ANTITRUST TOMATOES'));

echo $stmt->rowCount() . " rows affected\n";


