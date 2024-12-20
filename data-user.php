<?php
require 'functions.php';
$user = query("SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>Admin Panel</h2>
      <ul>
        <li><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="data-user.php"><i class="fas fa-users"></i> Data User</a></li>
        <li><a href="data-pengaduan.php"><i class="fas fa-file-alt"></i> Data Pengaduan</a></li>
        <li><a href="#data-kamar"><i class="fas fa-bed"></i> Data Kamar</a></li>
        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <header>
        <h1>Welcome, Admin</h1>
        <p id="clock"></p>
      </header>

      <!-- Data Table -->
      <section class="data-table">
        <h2>Data User</h2>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Email</th>
            </tr>
          </thead>
          <?php $i = 1; ?>
          <?php foreach ($user as $row) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $row["username"]; ?></td>
              <td><?= $row["email"]; ?></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </section>
    </main>
  </div>
  <script>
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