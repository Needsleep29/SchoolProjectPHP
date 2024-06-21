<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$databaseName = "latihanphp";

$connection = new mysqli($hostname, $user, $pass, $databaseName)
or die ("Gagal Koneksi"); 

$sql = "SELECT `ID`, `Nama`, `Tipe` FROM `latihanphp`.`anemo_character` WHERE  `ID`=9";

$query = $connection -> query ($sql);

if ($query -> num_rows != 0) {
    //iterasi data
    while ($row = $query ->fetch_assoc()){
        echo $row ["Nama"];
    }
}