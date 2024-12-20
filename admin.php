<?php
session_start();
echo "<script>
      document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
          title: 'Login Berhasil!',
          text: 'Selamat Datang Admin!',
          icon: 'success'
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
      });
    </script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>Admin Panel</h2>
      <ul>
        <li><a href="#dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
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
        <h2>Recent Activities</h2>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>john.doe@example.com</td>
              <td>Active</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane Smith</td>
              <td>jane.smith@example.com</td>
              <td>Inactive</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Bob Brown</td>
              <td>bob.brown@example.com</td>
              <td>Active</td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
</body>

</html>