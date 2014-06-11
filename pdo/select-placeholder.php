<?php

$db = new PDO('mysql:host=localhost;dbname=films', 
    'username', 'password');
$sql = 'select * from film where title = ?';
$stmt = $db->prepare($sql);
$stmt->execute(array('ANTITRUST TOMATOES'));
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while(($row = $stmt->fetch()) !== false) {
    print_r($row);
}


