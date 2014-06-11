<?php

$db = new PDO('mysql:host=localhost;dbname=films', 
    'username', 'password');
$sql = 'select * from film where title = :film '
    . 'and language_id = :lang';
$stmt = $db->prepare($sql);
$stmt->execute(array(
    ":film" => 'ANTITRUST TOMATOES',
    ":lang" => 1));
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while(($row = $stmt->fetch()) !== false) {
    print_r($row);
}


