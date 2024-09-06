<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ghost Rider Club</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .cover {
      background-image: url('img/pabrik1.jpg');
      background-size: cover;
      color: white;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .gallery img {
      max-width: 100%;
      height: auto;
    }
    .profile-section {
      background-color: #f8f9fa;
      padding: 20px;
    }
    .testimonial {
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 15px;
      margin-bottom: 10px;
    }
    .event-item {
      margin-bottom: 15px;
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

  <!-- Kata Pengantar -->
  <section class="container mt-5">
    <h2>Kata Pengantar</h2>
    <p>Selamat datang di blog resmi Ghost Rider Club, komunitas motor yang penuh semangat dan inovasi. Di sini, kami membagikan berita terbaru, informasi produk, dan acara-acara menarik. Terima kasih telah bergabung dengan kami dalam perjalanan ini. Mari eksplorasi berbagai konten dan temukan lebih banyak tentang apa yang membuat Ghost Rider Club istimewa.</p>
  </section>

  <!-- About Us -->
  <section class="container mt-5" id="about">
    <h2>Tentang Kami</h2>
    <p>Ghost Rider Club didirikan pada tahun 1990 oleh sekelompok penggemar motor yang memiliki semangat untuk berbagi kecintaan mereka terhadap dunia motor. Berawal dari pertemuan kecil di garasi, klub ini berkembang pesat menjadi salah satu komunitas motor terbesar dan paling berpengaruh di dunia. Kami mengadakan berbagai acara, dari pertemuan santai hingga kompetisi balap motor, serta menyediakan berbagai produk berkualitas untuk anggota kami.</p>
    <p>Dengan tujuan utama untuk menciptakan lingkungan yang mendukung dan penuh semangat, Ghost Rider Club terus berkembang dan berinovasi. Kami berkomitmen untuk memberikan pengalaman terbaik bagi setiap anggota dan penggemar motor melalui produk dan layanan kami.</p>
  </section>

  <!-- Visi dan Misi -->
  <section class="container mt-5">
    <h2>Visi dan Misi</h2>
    <div class="row">
      <div class="col-md-6">
        <h3>Visi</h3>
        <p>Menjadi komunitas motor terdepan yang diakui secara global karena semangat, inovasi, dan kontribusi kami terhadap dunia motor. Kami ingin menciptakan ruang di mana setiap penggemar motor merasa terhubung dan terinspirasi.</p>
      </div>
      <div class="col-md-6">
        <h3>Misi</h3>
        <p>Kami berkomitmen untuk:</p>
        <ul>
          <li>Menyediakan platform yang mendukung pertumbuhan dan interaksi antara penggemar motor.</li>
          <li>Menghadirkan produk dan layanan berkualitas tinggi untuk memenuhi kebutuhan komunitas motor.</li>
          <li>Menyelenggarakan acara yang memperkuat ikatan komunitas dan memberikan pengalaman yang tidak terlupakan.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Profile, Pengalaman, dan Kelebihan -->
  <section class="container mt-5 profile-section">
    <h2>Profil dan Pengalaman Club</h2>
    <p>Ghost Rider Club memiliki sejarah panjang dalam dunia motor. Kami telah mengorganisir ribuan acara, mulai dari gathering kecil hingga event internasional yang menarik ribuan peserta. Kami dikenal karena dedikasi kami terhadap kualitas dan kepuasan anggota, serta inovasi dalam layanan yang kami tawarkan.</p>
    <p><strong>Kelebihan Kami:</strong></p>
    <ul>
      <li><strong>Pengalaman Terpercaya:</strong> Dengan lebih dari 30 tahun pengalaman, kami telah menjadi pemimpin dalam industri motor.</li>
      <li><strong>Layanan Pelanggan Terbaik:</strong> Tim kami berkomitmen untuk memberikan layanan yang responsif dan profesional.</li>
      <li><strong>Komunitas Aktif:</strong> Kami memiliki anggota dari berbagai latar belakang yang saling mendukung dan berbagi passion yang sama.</li>
      <li><strong>Inovasi Berkelanjutan:</strong> Kami terus memperbarui produk dan layanan kami untuk memenuhi kebutuhan anggota kami.</li>
    </ul>
  </section>

  <!-- Produk -->
  <section class="container mt-5" id="product">
    <h2>Produk</h2>
    <p>Kami menyediakan berbagai produk seperti spare part yang dirancang untuk memenuhi kebutuhan penggemar motor, termasuk:</p>
    <div class="row">
      <div class="col-md-6">
        <h3>Produk Kami</h3>
        <ul>
          <li><strong>Helm:</strong> Helm berkualitas tinggi dengan berbagai desain dan ukuran untuk memastikan keselamatan dan kenyamanan.</li>
          <li><strong>Jaket Motor:</strong> Jaket yang dirancang khusus dengan bahan tahan angin dan pelindung tambahan untuk keamanan.</li>
          <li><strong>Keseluruhan Aksesori:</strong> Dari sarung tangan hingga pelindung lutut, kami menawarkan berbagai aksesori untuk meningkatkan pengalaman berkendara.</li>
        </ul>
      </div>
      <div class="col-md-6">
        <h3>Jasa Kami</h3>
        <ul>
          <li><strong>Perawatan Motor:</strong> Layanan perawatan berkala untuk memastikan motor Anda selalu dalam kondisi optimal.</li>
          <li><strong>Modifikasi Motor:</strong> Layanan kustomisasi untuk meningkatkan performa dan penampilan motor Anda.</li>
          <li><strong>Tune Up Mesin:</strong> Kami menerima Tuneup Mesin segala jenis kendaraan bermotor.</li>
        </ul>
      </div>
    </div>
  </section>
      <!--button-->
      <div class="d-flex justify-content-center">
      <a href="login.php" class="btn btn-danger btn-sm">Gas Pesan Wir !</a>
      </div>


  <!-- Gallery Foto -->
  <section class="container mt-5" id="gallery">
    <h2>Gallery</h2>
    <div class="row">
      <div class="col-md-4">
        <img src="img/gathering.jpg" alt="Gathering" class="img-fluid">
        <p class="text-center">Acara Gathering Tahunan</p>
      </div>
      <div class="col-md-4">
        <img src="img/gambar1.jpeg" alt="Balapan Motor" class="img-fluid">
        <p class="text-center">Balapan Motor Internasional</p>
      </div>
      <div class="col-md-4">
        <img src="img/kunjungan.jpg" alt="Kunjungan Pabrik" class="img-fluid">
        <p class="text-center">Kunjungan ke Pabrik Aksesori</p>
      </div>
    </div>
  </section>

  <!-- Daftar Klien -->
  <section class="container mt-5" id="client">
    <h2>Daftar Klien</h2>
    <div class="testimonial">
      <p>"Ghost Rider Club telah mengubah cara kami melihat komunitas motor. Layanan mereka sangat profesional dan produk mereka berkualitas tinggi!"</p>
      <footer class="blockquote-footer">John Doe, <cite title="Source Title">Klip Motor</cite></footer>
    </div>
    <div class="testimonial">
      <p>"Kami sangat puas dengan kerjasama kami dengan Ghost Rider Club. Event yang mereka selenggarakan selalu berjalan lancar dan penuh semangat."</p>
      <footer class="blockquote-footer">Jane Smith, <cite title="Source Title">MotorWorld</cite></footer>
    </div>
    <div class="testimonial">
      <p>"Produk-produk dari Ghost Rider Club benar-benar memenuhi harapan kami. Kami sangat merekomendasikan mereka kepada semua penggemar motor."</p>
      <footer class="blockquote-footer">Alex Johnson, <cite title="Source Title">RideOn</cite></footer>
    </div>
  </section>

  <!-- Kontak Kami -->
  <section class="container mt-5" id="contact">
    <h2>Kontak Kami</h2>
    <address>
      <p><strong>Alamat:</strong> Jl. Motor No. 123, Jakarta, Indonesia</p>
      <p><strong>Telepon:</strong> (021) 12345678</p>
      <p><strong>Fax:</strong> (021) 87654321</p>
      <p><strong>Email:</strong> info@ghostriderclub.com</p>
      <p><strong>Jam Operasional:</strong> Senin - Jumat, 09:00 - 17:00 WIB</p>
    </address>
  </section>

  <!-- Artikel -->
  <section class="container mt-5" id="articles">
    <h2>Artikel</h2>
    <div class="list-group">
      <a href="https://astraotoshop.com/article/cara-merawat-mesin-motor-agar-tetap-halus" class="list-group-item list-group-item-action" target="_blank">
        <h5 class="mb-1">Tips Merawat Motor Anda untuk Performa Optimal</h5>
        <p class="mb-1">Temukan berbagai cara untuk menjaga motor Anda tetap dalam kondisi terbaik dengan tips dari ahli kami.</p>
        <small>Diposting pada 1 Agustus 2024</small>
      </a>
      <a href="https://muri.org/Website/Rekor_detail/gathering_motor_besar_satu_merek_dengan_jenis_terbanyak" class="list-group-item list-group-item-action" target="_blank">
        <h5 class="mb-1">Event Terbaru: Gathering Tahunan 2024</h5>
        <p class="mb-1">Ikuti berita terbaru tentang gathering tahunan kami dan temukan bagaimana acara ini membawa komunitas lebih dekat.</p>
        <small>Diposting pada 15 Juli 2024</small>
      </a>
      <a href="https://soloraya.solopos.com/replika-harley-davidson-inilah-motor-ghost-rider-buatan-boyolali-585112" class="list-group-item list-group-item-action" target="_blank">
        <h5 class="mb-1">Kenali Aksesori Motor Terbaru dari Ghost Rider Club</h5>
        <p class="mb-1">Kami memperkenalkan aksesori terbaru yang akan meningkatkan pengalaman berkendara Anda.</p>
        <small>Diposting pada 25 Juni 2024</small>
      </a>
    </div>
  </section>

  <!-- Event -->
  <section class="container mt-5" id="events">
    <h2>Event</h2>
    <div class="event-item">
      <h5>Konferensi Motor Internasional</h5>
      <p>Tanggal: 15 November 2024</p>
      <p>Lokasi: Jakarta Convention Center</p>
      <p>Deskripsi: Bergabunglah dengan kami dalam konferensi internasional yang menghadirkan pembicara terkemuka dari industri motor.</p>
    </div>
    <div class="event-item">
      <h5>Gathering Club Tahunan</h5>
      <p>Tanggal: 30 Desember 2024</p>
      <p>Lokasi: Taman Mini Indonesia Indah</p>
      <p>Deskripsi: Acara tahunan di mana anggota dan penggemar berkumpul untuk merayakan pencapaian tahun ini dan merencanakan tahun depan.</p>
    </div>
    <div class="event-item">
      <h5>Pelatihan Safety Riding</h5>
      <p>Tanggal: 10 Januari 2025</p>
      <p>Lokasi: Ghost Rider Club HQ</p>
      <p>Deskripsi: Pelatihan mendalam tentang keselamatan berkendara untuk semua anggota dan penggemar motor.</p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Ghost Rider Club. All rights reserved. Designed by [Arief Khoirul Anwar].</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>