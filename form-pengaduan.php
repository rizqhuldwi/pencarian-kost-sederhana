<?php
session_start();
require 'functions.php';

if (isset($_POST['kirim'])) {
    if (pengaduan($_POST) > 0) {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Keluhan anda telah tersampaikan!',
                    icon: 'success'
                });
            });
        </script>";
    } else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Oops!',
                text: 'Keluhan gagal terkirim!',
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
    <title>Form Pengaduan | Kost Nasocha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background: #f3f5f9;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
        }
        #form-pengaduan {
            margin-left: 50px;
        }

        #option {
            width: 15%;
        }

        .form-select option {
            width: 10%;
        }

        .form-control {
            width: 35%;
        }

        h1 {
            margin-top: 60px;
        }

        .image {
            position: absolute;
            right: 100px;
            top: 100px;
            width: 400px;
            filter: drop-shadow(0 0 0.75rem blue);
        }
        #tanggal {
            width: 35%;
        }
        button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <form class="row g-3" id="form-pengaduan" method="post">
        <div>
            <h1>Form Pengaduan</h1>
        </div>
        <p></p>
        <div class="col-12">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama"> 
        </div>
        <div class="col-12" id="option">
            <label for="no_kamar" class="form-label">Nomor Kamar:</label>
            <select class="form-select" name="no_kamar">
                <option selected disabled value="">Kamar - 1</option>
                <option>Kamar - 2</option>
                <option>Kamar - 3</option>
                <option>Kamar - 4</option>
                <option>Kamar - 5</option>
                <option>Kamar - 6</option>
                <option>Kamar - 7</option>
                <option>Kamar - 8</option>
                <option>Kamar - 9</option>
                <option>Kamar - 10</option>
            </select>
        </div>
        <div class="col-12" id="tanggal">
            <label for="tanggal" class="form-label">Tanggal (dd/mm/yyyy):</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="dd/mm/yyyy" pattern="\d{2}/\d{2}/\d{4}">
        </div>
        <div class="col-12">
            <label for="keluhan" class="form-label">Keluhan:</label>
            <textarea class="form-control" id="keluhan" name="keluhan" rows="3"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
            <button type="submit" name="logout" class="btn btn-danger">Keluar</button>
        </div>
        <img src="img/bot.png" alt="" class="image">
    </form>
    <?php
    if (isset($_POST['logout'])) {
        header("Location: index.php");
        exit;
    }
    ?>
</body>

</html>