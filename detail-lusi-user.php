<?php
require 'functions.php';
if (isset($_POST['ajukan_sewa'])) {
  if (penyewaan($_POST) > 0) {
    header('Location: boking-kost-lusi.php');
  } else {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Oops!',
                text: 'Data gagal terkirim!',
                icon: 'error'
            });
        });
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Kost | Kost Lusi</title>
  <link rel="stylesheet" href="detail.css">
  <link rel="shortcut icon" href="img/kost.png" type="img/x-icon">
</head>

<body>
  <div class="container">
    <!-- Main Content -->
    <div class="main-content">
      <!-- Image Gallery -->
      <div class="image-gallery">
        <img class="main-image" src="img/kost2.jpg" alt="Main Kost Image">
        <div class="thumbnail-gallery">
          <img src="img/kost1.jpg" alt="Thumbnail 1">
          <img src="img/kost1.jpg" alt="Thumbnail 2">
          <img src="img/kost1.jpg" alt="Thumbnail 3">
          <span class="see-more">Lihat semua foto</span>
        </div>
      </div>

      <!-- Kost Information -->
      <div class="kost-info">
        <h1>Kost Lusi </h1>
        <p>Kost Lusi adalah kost putra umum yang berlokasi di Jl. Monjali Sinduadi, Sleman, Yogyakarta. Kost ini
          menyediakan fasilitas umum yang lengkap dan spesifikasi kamar yang nyaman.</p>
        <hr>
        <div class="facilities">
          <h3>Fasilitas Umum</h3>
          <p> • Dapur</p>
          <p> • Listrik</p>
          <p> • Parkir Motor</p>
          <p> • K. Mandi Luar</p>
          <p> • Tempat Jemuran</p>
        </div>
        <hr>
        <div class="facilities">
          <h3>Spesifikasi Kamar</h3>
          <p> • 4 x 3 meter</p>
          <p> • Kasur</p>
          <p> • Lemari</p>
          <p> • Meja Belajar</p>
          <hr>
        </div>
        <div class="facilities">
          <h3>Lokasi</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3953.2852241733767!2d110.36729337500468!3d-7.759544992259503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNDUnMzQuNCJTIDExMMKwMjInMTEuNSJF!5e0!3m2!1sid!2sid!4v1734013843421!5m2!1sid!2sid" 
            width="400" height="300" style="border:0;" allowfullscreen="" 
            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          <hr>
          <a href="index-user.php">&laquo Kembali</a>
        </div>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <h2>Formulir Penyewaan Kamar</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="nama">Nama Lengkap:</label>
          <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <input type="text" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
          <label for="telephone">Nomor Telepon:</label>
          <input type="tel" id="telephone" name="telephone" required>
        </div>
        <div class="form-group">
          <label for="kamar">Nomor Kamar:</label>
          <select name="kamar" id="kamar">
            <option value="kamar-1">Kamar 1</option>
            <option value="kamar-2">Kamar 2</option>
            <option value="kamar-3">Kamar 3</option>
            <option value="kamar-4">Kamar 4</option>
          </select>
        </div>
        <div class="form-group">
          <label for="durasi">Durasi Sewa:</label>
          <select id="durasi" name="durasi" required>
            <option value="1-bulan">1 Bulan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="tanggal">Tanggal Mulai Sewa:</label>
          <input type="date" id="tanggal" name="tanggal" required>
        </div>
        <a href="boking-kost-lusi" target="_blank">
          <button type="submit" name="ajukan_sewa" class="apply-rent">Ajukan Sewa</button>
        </a>
      </form>
    </div>
  </div>
</body>
</html>