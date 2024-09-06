<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Latihan JWD</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script>
  // Fungsi untuk menambahkan koma pada angka
  function formatNumberWithCommas(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

  // Fungsi Untuk Memilih Paket Melalui Combo Box
  function pilihPaket(pkt) {
    var selectedpaket = "";
    var jumlahPaket = 0;
    var potongan = 0;
    var hargaPaket = 0;
    var durasi = document.getElementById("durasi").value;
    var peserta = document.getElementById("peserta").value;

    // Hitung panjang array dan tentukan potongan diskon
    for (i = 0; i < pkt.paket.length; i++) {
      if (pkt.paket[i].checked) {
        selectedpaket += pkt.paket[i].value + " ";
        jumlahPaket += pkt.paket.length / 3;
        potongan = (jumlahPaket - 1) * 5;
      }
    }

    // Menentukan harga paket berdasarkan kombinasi yang dipilih
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

    // Menampilkan hasil dengan format angka
    document.getElementById("pilihan").value = selectedpaket.trim();
    document.getElementById("diskon").value = potongan;
    document.getElementById("harga_paket").value = hargaPaket;
    document.getElementById("total_biaya").value = total;
  }

  // clear semua inputan pada form
  function resetForm() {
    document.querySelector('form').reset();
    document.getElementById("pilihan").value = "";
    document.getElementById("diskon").value = "";
    document.getElementById("harga_paket").value = "";
    document.getElementById("total_biaya").value = "";
  }
</script>



  </head>
  <body>
  <h2 class="text-center">GASSKEUN PESAN BOLO</h2>

<!-- gambar beranda -->
<div class="container mt-4">
    <img src="img/pabrik1.jpg" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover;" alt="Banner Pabrik">
</div>
    
    

    <!-- coretan -->
        <?php
        session_start();
        if (array_key_exists("loginStatus",$_SESSION) == false && array_key_exists("email",$_SESSION) == false) {
        }
        ?>
      
    <!--form pemesanan-->
    <h2 class="text-center">Pemesanan Sparepart Motor</h2>
    <br>
    <form action="kirim_data.php" method="POST">
      <div class="container">
        <div class="row justify-content-center">  
          <div class="col-6">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Pemesan</label>
              <input type="text" class="form-control" id="nama" placeholder="Nama Pemesan" name="nama" <?php if (array_key_exists('email',$_SESSION) == true) echo 'value="'.$_SESSION['email'].'" readonly';?>>
            </div>
            <div class="mb-3">
              <label for="nohp" class="form-label">Nomor HP</label>
              <input type="text" class="form-control" id="nohp" placeholder="Nomor HP" name="nohp">
            </div>

            <label for="durasi" class="form-label">Estimasi Pengiriman</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="durasi" placeholder="0" name="durasi" oninput="pilihPaket(this.form)">
              <span class="input-group-text" id="basic-addon2">Hari</span>
            </div>

            <label for="peserta" class="form-label">Jumlah Barang</label> &nbsp;
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="peserta" name="peserta" oninput="pilihPaket(this.form)">
              <span class="input-group-text" id="basic-addon2">Barang</span>
            </div>

            <label for="paket" class="form-label">Paket Sparepart</label><br>
            <div class="form-check form-check-inline">
              <input name="paket" class="form-check-input" type="checkbox" id="penginapan" onclick="pilihPaket(this.form)" value="Small,">
              <label class="form-check-label" for="inlineCheckbox1">Small</label>
            </div>
            <div class="form-check form-check-inline">
              <input name="paket" class="form-check-input" type="checkbox" id="transportasi" onclick="pilihPaket(this.form)" value="Meidum,">
              <label class="form-check-label" for="inlineCheckbox2">Medium</label>
            </div>
            <div class="form-check form-check-inline">
              <input name="paket" class="form-check-input" type="checkbox" id="makan" onclick="pilihPaket(this.form)" value="Large">
              <label class="form-check-label" for="inlineCheckbox2">Large</label>
            </div>

            <div class="mb-3">
              <label for="pilihan" class="form-label">Pilihan Anda</label>
              <input type="text" class="form-control" id="pilihan" placeholder="" name="pilihan" readonly>
            </div>

            <label for="diskon" class="form-label">Diskon</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="diskon" name="diskon" readonly>
              <span class="input-group-text">%</span>
            </div>

            <label for="harga_paket" class="form-label">Harga Paket</label>
            <div class="input-group mb-3">
              <span class="input-group-text">Rp</span>
              <input type="text" class="form-control" name="harga_paket" id="harga_paket" readonly>
              <span class="input-group-text">.00</span>
            </div>

            <label for="total_biaya" class="form-label">Jumlah Tagihan</label>
            <div class="input-group mb-3">
              <span class="input-group-text">Rp</span>
              <input type="text" class="form-control" name="total_biaya" id="total_biaya" readonly>
              <span class="input-group-text">.00</span>
            </div>

            <!--Button coy-->
            <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-primary me-2" onclick="window.location.href='tabel_pesanan.php'">Lihat Pesanan</button>
              <button type="submit" class="btn btn-success me-auto" name="simpan">Simpan</button>
              <button type="button" class="btn btn-warning" onclick="resetForm()">Reset</button>
            </div>

          </div>
        </div>
      </div>
    </form>
  </body>
</html>
