<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit Pesanan</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script>
      // Fungsi Untuk Memilih Paket dari Combo Box
      function pilihPaket(pkt) {
        var selectedpaket = "";
        var jumlahPaket = 0;
        var potongan = 0;
        var hargaPaket = 0;
        //nilai input text durasi
        var durasi = document.getElementById("durasi").value;
        //nilai input peserta
        var peserta = document.getElementById("peserta").value;

        // Hitung panjang array dan tentukan potongan diskon
        for (i = 0; i < pkt.paket.length; i++) {
          if (pkt.paket[i].checked) {
            selectedpaket += pkt.paket[i].value + " ";
            //menentukan potongan, dibagi 3 karena masuk dalam perulangan
            jumlahPaket += pkt.paket.length / 3;
            //menentukan diskon, pilih 2 paket diberikan diskon 5% jika 3 paket diskon 10%
            potongan = (jumlahPaket - 1) * 5;
          }
        }

        // Menentukan harga paket berdasarkan kondisi yang dipilih
        if (pkt.paket[0].checked && pkt.paket[1].checked && pkt.paket[2].checked) {
          hargaPaket = 2000000;
        } else if (pkt.paket[0].checked && pkt.paket[1].checked) {
          hargaPaket = 1500000;
        } else if (pkt.paket[0].checked && pkt.paket[2].checked) {
          hargaPaket = 1500000;
        } else if (pkt.paket[1].checked && pkt.paket[2].checked) {
          hargaPaket = 1000000;
        } else if (pkt.paket[1].checked) {
          hargaPaket = 500000;
        } else if (pkt.paket[2].checked) {
          hargaPaket = 500000;
        } else if (pkt.paket[0].checked) {
          hargaPaket = 1000000;
        }

        // Menghitung total biaya dengan diskon
        var total = durasi * peserta * hargaPaket - ((durasi * peserta * hargaPaket) * (potongan / 100));

        // Menampilkan hasil
        document.getElementById("pilihan").value = selectedpaket.trim();
        document.getElementById("diskon").value = potongan;
        document.getElementById("harga_paket").value = hargaPaket;
        document.getElementById("total_biaya").value = total;
      }
    </script>
  </head>

  <!--batas logic coy-->

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
  <h2 class="text-center">Form Edit Pesanan</h2>

<!-- bagian db -->
<?php 
    include ("koneksi.php");
    $id = $_GET['id']; //ambil id yang dikirim dari halaman tabel pesanan

    $data = mysqli_query($connect, "SELECT * from pesanan WHERE id='$id'");
    $row = mysqli_fetch_assoc($data);
    //var_dump($row);

?>
<!-- form edit pesanan -->
<br>
<form action="edit_data.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
     <!-- Tambahkan input hidden untuk pilihan -->
     <input type="hidden" id="pilihan" name="pilihan" value="<?php echo isset($row['pilihan']) ? $row['pilihan'] : ''; ?>">

    <div class="container">
        <div class="row justify-content-center">
            <h4 class="text-center">Silakan edit data pesanan Anda</h4>
            <div class="col-6">

                <!-- Nama Pemesan -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Pemesan" name="nama" value="<?php echo isset($row['nama_pemesan']) ? $row['nama_pemesan'] : ''; ?>">
                </div>

                <!-- Nomor HP -->
                <div class="mb-3">
                    <label for="nohp" class="form-label">Nomor HP</label>
                    <input type="text" class="form-control" id="nohp" placeholder="Nomor HP" name="nohp" value="<?php echo isset($row['no_telp']) ? $row['no_telp'] : ''; ?>">
                </div>

                <!-- Estimasi Pengiriman -->
                <label for="durasi" class="form-label">Estimasi Pengiriman</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="durasi" placeholder="0" name="durasi" value="<?php echo isset($row['durasi']) ? $row['durasi'] : ''; ?>" required>
                    <span class="input-group-text" id="basic-addon2">Hari</span>
                </div>

                <!-- Jumlah Barang -->
                <label for="peserta" class="form-label">Jumlah Barang</label> &nbsp;
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="peserta" name="peserta" value="<?php echo isset($row['jmlh_peserta']) ? $row['jmlh_peserta'] : ''; ?>" required>
                    <span class="input-group-text" id="basic-addon2">Barang</span>
                </div>

                <!-- Diskon -->
                <label for="diskon" class="form-label">Diskon</label> &nbsp;
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="diskon" placeholder="0" name="diskon" readonly value="<?php echo isset($row['diskon']) ? $row['diskon'] : 0; ?>">
                    <span class="input-group-text" id="basic-addon2">%</span>
                </div>

                <!-- Harga Paket -->
                <label for="harga_paket" class="form-label">Harga Paket</label><br>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" name="harga_paket" id="harga_paket" readonly value="<?php echo isset($row['harga']) ? $row['harga'] : ''; ?>">
                    <span class="input-group-text">.00</span>
                </div>

                <!-- Jumlah Tagihan -->
                <label for="total_biaya" class="form-label">Jumlah Tagihan</label><br>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" name="total_biaya" id="total_biaya" readonly value="<?php echo isset($row['jumlah']) ? $row['jumlah'] : ''; ?>">
                    <span class="input-group-text">.00</span>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary me-2" onclick="window.location.href='tabel_pesanan.php'">Lihat Pesanan</button>
                    <button type="submit" class="btn btn-success me-auto" name="simpan">Simpan</button>
                    <button type="submit" class="btn btn-warning me-auto" name="edit">Edit</button>
                    <button type="button" class="btn btn-danger" onclick="resetForm()">Reset</button>
                </div>
            </div>
        </div>
    </div>
</form>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
