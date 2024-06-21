<?php

$hostname = "localhost";
$user = "root";
$pass = "root";
$databaseName = "latihanphp";

$connection = new mysqli($hostname, $user, $pass, $databaseName);

if ($connection->connect_error) {
    die("connection failed: ".$connection->connect_error);
}

$sql = "UPDATE `anemo_character` SET `Tipe` = 'DPS' WHERE `id` = 11";

if ($connection->query($sql) === TRUE) {
    echo "Data berhasil diupdate";
} else {
    echo "Error: ". $sql . "<br>". $connection->error;
}