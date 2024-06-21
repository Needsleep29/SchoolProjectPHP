<?php
if(isset($_GET['NIM'])) {
    $mysql = new mysqli("localhost", "root", "", "needsleep");

    if ($mysql->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysql->connect_error;
    } else {
        $nim = $_GET['NIM'];
        $sql = "DELETE FROM mahasiswa WHERE NIM='$nim'";

        if ($mysql->query($sql) === TRUE) {
            echo "Record with NIM $nim has been deleted successfully.";
        } else {
            echo "Error deleting record: " . $mysql->error;
        }
    }
    $mysql->close();
}
?>
