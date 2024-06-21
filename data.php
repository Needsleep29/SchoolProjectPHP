<?php 

/* if (isset($_GET["Nama"])) {
    $namaCharacter = $_GET["Nama"];
    echo "Nama hero saya: ". $namaCharacter;
} */

if (isset($_POST["Nama"])) {
    $namaCharacter = $_POST["Nama"];
    echo "Nama hero saya: " . $namaCharacter; 
}
?>

<form action="data.php" method="POST">
    Nama hero: <input type="text" name="Nama"/>
    <input type="submit"/>
</form>
