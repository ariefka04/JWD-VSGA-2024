<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM pesanan WHERE id='$id'");
if ($query) {
    header('location:tabel_pesanan.php');
}
?>