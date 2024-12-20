<?php

session_start();
if (isset($_SESSION['cari_kost'])) {
    header('Location: result.php?keyword=' . $_SESSION['cari_kost']);
    exit();
}

if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Login Berhasil!',
                    text: 'Selamat Datang User!',
                    icon: 'success'
                });
            });
        </script>";
    unset($_SESSION['login']);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REEZKOST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="img/kost.png" type="img/x-icon">
</head>

<body>
    <header>
        <a href="#beranda" class="logo">REEZKOST</a>
        <ul>
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="tentang-kami.php">Tentang Kami</a></li>
            <li><a href="login.php">Login/Register</a></li>
        </ul>
    </header>
    <section id="beranda">
        <div class="judul">
            <br>
            <h1>Selamat Datang</h1>
            <h2>Sedang mencari kost?</h2>
            <br>
            <p>REEZKOST menyediakan berbagai macam kost <br>
                yang nyaman dan aman untuk ditinggali</p>
            <br>
            <div class="search">
                <div class="search-box">
                    <div class="search-field">
                        <input placeholder="Cari Kost" class="input" type="text" id="searchInput" name="keyword">
                        <div class="search-box-icon">
                            <button type="submit" class="btn-icon-content" name="cari_kost" id="searchButton">
                                <i class="search-icon">
                                    <svg xmlns="://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512">
                                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" fill="#fff"></path>
                                    </svg>
                                </i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-house">
            <img src="img/kost.png" alt="House Image">
            <p id="clock"></p>
        </div>
        <div class="theme-switch">
            <input type="checkbox" id="theme-switch-checkbox">
            <label for="theme-switch-checkbox"></label>
        </div>
        <div class="underline">
            <hr>
        </div>
        <div class="recomendation">
            <h2>Rekomendasi Kost daerah Sinduadi</h2>
        </div>

        <!-- card container -->
        <div class="container" id="cardContainer">
            <!-- Card 1 -->
            <div class="card" data-name="Kost Nasocha" data-city="Yogyakarta">
                <div class="image-container">
                    <img src="img/kost1.jpg" alt="Kost Image">
                    <span class="badge purple">Tersedia</span>
                </div>
                <div class="info">
                    <span class="category">Putra</span>
                    <h3>Kost Nasocha</h3>
                    <p>Akses 24 Jam</p>
                    <div class="price">
                        <span class="final-price">Rp 2.100.000 <small>(6 Bulan)</small></span>
                    </div>
                    <a href="detail-nasocha-user.php">Lihat Selengkapnya</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card" data-name="Kost Lusi" data-city="Yogyakarta">
                <div class="image-container">
                    <img src="img/kost3.jpg" alt="Kost Image">
                    <span class="badge purple">Tersedia</span>
                </div>
                <div class="info">
                    <span class="category">Putra</span>
                    <h3>Kost Lusi</h3>
                    <p>WiFi • Akses 24 Jam</p>
                    <div class="price">
                        <span class="final-price">Rp 665.000 <small>(Perbulan)</small></span>
                    </div>
                    <a href="detail-lusi-user.php">Lihat Selengkapnya</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card" data-name="Kost Tukijo" data-city="Yogyakarta">
                <div class="image-container">
                    <img src="img/kost-tukijo.jpg" alt="Kost Image">
                    <span class="badge purple">Tersedia</span>
                </div>
                <div class="info">
                    <span class="category">Putra</span>
                    <h3>Kost Tukijo</h3>
                    <p>WiFi • Akses 24 Jam</p>
                    <div class="price">
                        <span class="final-price">Rp 500.000 <small>(Perbulan)</small></span>
                    </div>
                    <a href="detail-tukijo-user.php">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="underline">
            <hr>
        </div>

        <div class="recomendation">
            <h2>Rekomendasi Kost Dekat Kampus 1 UTY</h2>
        </div>

        <!-- card container -->
        <div class="container" id="cardContainer">
            <!-- Card 1 -->
            <div class="card" data-name="Kost Nasocha" data-city="Yogyakarta">
                <div class="image-container">
                    <img src="img/kost1.jpg" alt="Kost Image">
                    <span class="badge purple">Tersedia</span>
                </div>
                <div class="info">
                    <span class="category">Putra</span>
                    <h3>Kost Nasocha</h3>
                    <p>Akses 24 Jam</p>
                    <div class="price">
                        <span class="final-price">Rp 2.100.000 <small>(6 Bulan)</small></span>
                    </div>
                    <a href="detail-nasocha.php">Lihat Selengkapnya</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card" data-name="Kost Lusi" data-city="Yogyakarta">
                <div class="image-container">
                    <img src="img/kost3.jpg" alt="Kost Image">
                    <span class="badge purple">Tersedia</span>
                </div>
                <div class="info">
                    <span class="category">Putra</span>
                    <h3>Kost Lusi</h3>
                    <p>WiFi • Akses 24 Jam</p>
                    <div class="price">
                        <span class="final-price">Rp 665.000 <small>(Perbulan)</small></span>
                    </div>
                    <a href="detail-lusi.php">Lihat Selengkapnya</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card" data-name="Kost Tukijo" data-city="Yogyakarta">
                <div class="image-container">
                    <img src="img/kost-tukijo.jpg" alt="Kost Image">
                    <span class="badge purple">Tersedia</span>
                </div>
                <div class="info">
                    <span class="category">Putra</span>
                    <h3>Kost Tukijo</h3>
                    <p>WiFi • Akses 24 Jam</p>
                    <div class="price">
                        <span class="final-price">Rp 500.000 <small>(Perbulan)</small></span>
                    </div>
                    <a href="detail-tukijo.php">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="footer">
            <footer>
                <p>&copy; <b>REEZKOST</b> 2024</p>
            </footer>
        </div>
    </section>

    </form>
    </div>
    <script src="script.js"></script>
    <script>
        const searchInput = document.getElementById('searchInput');
        const searchButton = document.getElementById('searchButton');

        searchButton.addEventListener('click', function() {
            const keyword = searchInput.value.trim().toLowerCase();

            if (keyword) {
                // Redirect ke halaman hasil pencarian dengan kata kunci sebagai parameter
                window.location.href = `result.php?keyword=${encodeURIComponent(keyword)}`;
            } else {
                alert('Masukkan kata kunci untuk mencari!');
            }
        });

        function updateTime() {
            var now = new Date();
            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');
            var seconds = now.getSeconds().toString().padStart(2, '0');
            document.getElementById('clock').innerText = hours + ':' + minutes + ':' + seconds;
        }
        setInterval(updateTime, 1000);
        updateTime();
    </script>
</body>

</html>