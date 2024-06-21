<?php
$mysql = new mysqli("localhost", "root", "", "needsleep");

if ($mysql->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysql->connect_error;
} else {
    echo "Connected to MySQL successfully";
}

if (isset($_GET['NIM'])) {
    $NIM = $_GET['NIM'];
    $query = "SELECT * FROM mahasiswa WHERE NIM = '$NIM'";
    $result = $mysql->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>

        <form action="update.php" method="post">
            <input type="hidden" name="oldNIM" value="<?php echo $row['NIM']; ?>">
            <label>NIM:</label>
            <input type="text" name="NIM" value="<?php echo $row['NIM']; ?>"> <br>
            <label>Nama:</label>
            <input type="text" name="Nama" value="<?php echo $row['Nama']; ?>"><br>
            <input type="submit" value="Update">
        </form>
       
        <?php
    } else {
        echo "No student found with this NIM.";
    }
} else {
    echo "Invalid request.";
}
?>