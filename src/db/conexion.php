<?php

$link = 'mysql:host=localhost; dbname=yt_colores';
$user = 'root';
$password = '';

try {
    $con = new PDO($link, $user, $password);
} catch (PDOException $e) {
    print "Error " . $e->getMessage() . "<br>";
    die();
}