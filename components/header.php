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
        <li class="nav-item"><a class="nav-link" href="#product">Product</a></li>
        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="#client">Daftar Client</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Kontak Kami</a></li>
        <li class="nav-item"><a class="nav-link" href="#articles">Artikel</a></li>
        <li class="nav-item"><a class="nav-link" href="#events">Event</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
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

  <!-- Cover -->
  <div class="cover banner" id="home">
    <div>
      <h1>Ghost Rider Club</h1>
      <p>Join Us for the Ride of Your Life!</p>
    </div>
  </div>