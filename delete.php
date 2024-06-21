<?php

$hostname = "localhost";
$user = "root";
$pass = "root";
$databaseName = "latihanphp";

$connection = new mysqli($hostname, $user, $pass, $databaseName);

if ($connection->connect_error) {
    die("connection failed: ".$connection->connect_error);
}

$sql = "DELETE FROM `anemo_character` WHERE Tipe = 'support'";

if ($connection->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: ". $sql . "<br>". $connection->error;
}