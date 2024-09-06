<?php
$server = "localhost";
$user = "root";
$pass = "";
$nama_db = "jwb";

try {
    $connect = mysqli_connect($server, $user, $pass, $nama_db);
}
catch (Exception $e) {
        die("GAGAL TERHUBUNG KE DB : " . mysqli_connect_error());
}

?>