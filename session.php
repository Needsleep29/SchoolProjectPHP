 <?php

 session_start();

 $_SESSION['username'] = $_POST['username'];
 $_SESSION['password'] = $_POST['password'];

 if (isset($_SESSION['username']) and isset($_SESSION['password'])) {
    echo "Anda sudah login";
    echo "<br/>";
    echo "<a href=\"logout.php\">Logout</a>";
 } else {
    echo "Anda belum login";  
 }