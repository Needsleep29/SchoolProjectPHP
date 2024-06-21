<?php
// Koneksi ke database
$mysqli = new mysqli("localhost", "root", "root", "latihanphp");

// Cek koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

// Query untuk memasukkan data
$sql = "INSERT INTO `latihanphp`.`anemo_character` (`Nama`, `Tipe`) 
    VALUES 
    ('Lynette', 'Sub Dps'),
    ('Aether', 'Sub DPS'),
    ('Lumine', 'Sub DPS')";

// Eksekusi query
if ($mysqli->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

// Menutup koneksi
$mysqli->close();
?>
