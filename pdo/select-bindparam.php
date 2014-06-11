<?php

$lang = 1;
$film = "ACADEMY DINOSAUR";
$db = new PDO('mysql:host=localhost;dbname=films', 
    'username', 'password');
$sql = 'select * from film where title = :film '
    . 'and language_id = :lang';
$stmt = $db->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->bindParam(":lang", $lang);
$stmt->bindParam(":film", $film);
$stmt->execute();
$row = $stmt->fetch();
print_r($row);
$film = "ANTITRUST TOMATOES";
$stmt->execute();
$row = $stmt->fetch();
print_r($row);


