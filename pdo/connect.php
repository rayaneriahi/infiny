<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=infiny;charset=utf8', 'root', '');
} catch (Exception) {
    die;
}

$clients = $db->prepare('SELECT * FROM client');
$clients->execute();
$clients->fetchAll();

?>