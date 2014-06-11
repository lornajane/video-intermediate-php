<?php

$db = new PDO('mysql:host=localhost;dbname=films', 
    'username', 'password');
$sql = 'select * from country';
$stmt = $db->query($sql);
while(($row = $stmt->fetch()) !== false) {
    echo $row['country'] . "\n";
}


