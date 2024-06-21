<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$mysql = new mysqli("localhost", "root", "", "needsleep");

if ($mysql->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysql->connect_error;
} else {
    echo "Connected to MySQL successfully";
}

$hasil = $mysql->query("select * from mahasiswa");
if ($hasil->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>NIM</th>"; 
    echo "<th>Nama</th>"; 
    echo "<th>Aksi</th>"; 
    echo "<th>Edit</th>";
    echo "</tr>";

    while ($rows = $hasil->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $rows["NIM"] . "</td>";
        echo "<td>" . $rows["Nama"] . "</td>";
        echo "<td><a href='hapus.php?NIM=" . $rows["NIM"] . "'>Hapus</a></td>";
        echo "<td><a href='edit.php?NIM=" . $rows["NIM"] . "'>Edit</a></td>";
        echo "</tr>";

    }

    echo "</table>";
}
?>
<br>

<form action="insert.php" method="post">
    NIM: <input type = "text" name = "NIM"> <br>
    Nama: <input type="text" name = "Nama"> <br>
    <button type="submit">submit</button>

</form>



    
