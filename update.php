<?php
$mysql = new mysqli("localhost", "root", "", "needsleep");

if ($mysql->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysql->connect_error;
} else {
    echo "Connected to MySQL successfully";
}

if (isset($_POST['oldNIM']) && isset($_POST['NIM']) && isset($_POST['Nama'])) {
    $oldNIM = $_POST['oldNIM'];
    $NIM = $_POST['NIM'];
    $Nama = $_POST['Nama'];

    $query = "UPDATE mahasiswa SET NIM = '$NIM', Nama = '$Nama' WHERE NIM = '$oldNIM'";
    $result = $mysql->query($query);

    if ($result) {
        echo "Data berhasil di update.<br><a href='study2.php'>Kembali</a>";
    } else {
        echo "Error update data: " .$mysql->error;
    }
} else {
    echo "Invalid request.";
}

$mysql->close();
?>

