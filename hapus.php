<?php
require 'functions.php'; 
$id = $_GET["id"];

echo "<link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap' rel='stylesheet'>";
echo "<style>
    .swal2-popup {
        font-family: 'Poppins', sans-serif;
    }
      </style>";

if (hapus($id) > 0) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data Pengaduan Telah Dihapus!',
            icon: 'success'
        }).then(function() {
            window.location = 'data-pengaduan.php';
        });
        });
    </script>";
} else {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Gagal!',
            text: 'Data gagal dihapus!',
            icon: 'error'
        }).then(function() {
            window.location = 'data-pengaduan.php';
        });
        });
    </script>";
}
