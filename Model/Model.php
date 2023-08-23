<?php

function connection(){
    $conn = mysqli_connect('localhost', 'DannyChronos', 'cortana4002', 'lend');
    return $conn;
}

function connection_with_PDO(){
    $db = new PDO("mysql:host=localhost;dbname=lend","DannyChronos","cortana4002");
    return $db;
}