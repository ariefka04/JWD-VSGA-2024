<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesan Produk</title>
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

      <!--Heading awal-->
    <h1 style="text-align: center; margin-top: 30px; margin-bottom: 30px;       font-weight: bold; color: #007bff; text-transform: uppercase;">
      Berikut Produk dan Layanan yang Tersedia
    </h1>

    <!-- Tampilan produk dan jasa -->
<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
    <div class="col">
      <div class="card h-100">
        <img src="img/banmotor.jpg" class="card-img-top" alt="Gunung Lawu" style="height: 200px; object-fit: cover;">
        <div class="card-body text-center">
          <h5 class="card-title">Produk Sparepart</h5>
          <p class="card-text">Ban Motor</p>
          <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/rantai.jpeg" class="card-img-top" alt="Gunung Merbabu" style="height: 200px; object-fit: cover;">
        <div class="card-body text-center">
          <h5 class="card-title">Produk Sparepart</h5>
          <p class="card-text">Rantai Motor</p>
          <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/lampu.jpeg" class="card-img-top" alt="Gunung Semeru" style="height: 200px; object-fit: cover;">
        <div class="card-body text-center">
          <h5 class="card-title">Produk Sparepart</h5>
          <p class="card-text">Lampu Motor</p>
          <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/oli.jpg" class="card-img-top" alt="Gunung Rinjani" style="height: 200px; object-fit: cover;">
        <div class="card-body text-center">
          <h5 class="card-title">Produk 4</h5>
          <p class="card-text">Oli Motor</p>
          <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/serivce.jpg" class="card-img-top" alt="Service Motor" style="height: 200px; object-fit: cover;">
        <div class="card-body text-center">
          <h5 class="card-title">Jasa</h5>
          <p class="card-text">Service Motor atau Perawatan Motor</p>
          <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/modif.jpeg" class="card-img-top" alt="Modifikasi Motor" style="height: 200px; object-fit: cover;">
        <div class="card-body text-center">
          <h5 class="card-title">Jasa</h5>
          <p class="card-text">Modifikasi Motor</p>
          <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/tuneup.jpg" class="card-img-top" alt="Tune Up" style="height: 200px; object-fit: cover;">
        <div class="card-body text-center">
          <h5 class="card-title">Jasa</h5>
          <p class="card-text">Tune Up Mesin</p>
          <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="img/cucimotor.jpg" class="card-img-top" alt="Cuci Motor" style="height: 200px; object-fit: cover;">
        <div class="card-body text-center">
          <h5 class="card-title">Jasa</h5>
          <p class="card-text">Cuci Motor</p>
          <a href="pemesanan.php" class="btn btn-primary btn-sm">Gas Pesan</a>
        </div>
      </div>
    </div>
  </div>
</div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>