<?php
    
    $sql= "INSERT INTO mahasiswa (NIM,  Nama) VALUES ('".$_POST["NIM"].   "', '".$_POST["Nama"].  "')"; 

    $mysql = new mysqli("localhost", "root", "", "needsleep");

if ($mysql->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysql->connect_error;
} 

$hasil = $mysql->query($sql);


if ($hasil) {
    echo "data berhasil diinput .<a href='study2.php'> kembali </a>";
}
else {
    echo "data gagal diinput .<a href='study2.php'> kembali </a>";
}
