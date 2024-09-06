<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rincian Pesanan</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #f8f9fa; /* Warna background yang lebih terang */
      }
    </style>
  </head>
  <body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
      <img src="img/gambar5.jpg" style="width: 50px;">
      Ghost Rider Club
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#product">Product</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#client">Daftar Client</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#contact">Kontak Kami</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#articles">Artikel</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#events">Event</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#about">Tentang Kami</a></li>
        <?php
        session_start();
        if (array_key_exists("loginStatus",$_SESSION) == false && array_key_exists("email",$_SESSION) == false) {
            echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
        }
        else {
            echo '<li class="nav-item"><a class="nav-link active">'.$_SESSION['email'].'</a></li>';
            echo '<li class="nav-item"><a class="nav-link active" href="login.php" aria-disabled="true">Logout</a></li>';
        }
        ?>
      </ul>
    </div>
  </nav>

    <!-- data pesanan -->
    <br>
    <div class="container">
    <h1>Berikut adalah Daftar Lengkap Pesanan Produk Anda</h1>

    <!-- tabel pesanan -->
    <div style="margin-top: 30px;">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pemesan</th>
          <th scope="col">No Telp</th>
          <th scope="col"><Em>Estimasi Hari Pengiriman</Em></th>
          <th scope="col">Jumlah Barang</th>
          <th scope="col">Total Biaya</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>   
      <tbody>

      <?php 
      include 'koneksi.php';
      $data_pesanan = mysqli_query($connect, "SELECT * from pesanan");
      $no = 1; 
      foreach ($data_pesanan as $pesanan) { ?> 
        <tr>
          <td><?php echo $no ; ?></td>
          <td><?php echo $pesanan['nama_pemesan']; ?></td>
          <td><?php echo $pesanan['no_telp']; ?></td>
          <td><?php echo $pesanan['durasi']; ?></td>
          <td><?php echo $pesanan['jmlh_peserta']; ?></td>
          <td><?php echo $pesanan['jumlah']; ?></td>
          <td><a href="edit.php?id=<?php echo $pesanan['id']; ?>"><button type="button" class="btn btn-warning">EDIT</button></a>&nbsp
          <a href="hapus.php?id=<?php echo $pesanan['id']; ?>" ><button type="button" class="btn btn-danger">DELETE</button></a></td>
        </tr>
        <?php $no++ ; }
        ?> 
      </tbody>
    </table>

    <!--button-->
    <div class="d-flex justify-content-end">
      <button type="button" class="btn btn-primary" onclick="window.location.href='pemesanan.php'">Kembali</button>
    </div>

    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>