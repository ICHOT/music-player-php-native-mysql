<?php
include "../koneksi/koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

// proses login
$login = mysqli_query($connect, "SELECT * FROM account WHERE username = '$username' AND password = '$password'");
$row = mysqli_fetch_array($login);
// validasi role admin
if (
  $row['username'] == $username and
  $row['password'] == $password and
  $row['role'] == "ADMIN"
) {
  session_start();
  $_SESSION['id_user'] = $row['id_user'];
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  $_SESSION['role'] = $row['role'];
?>
  <script>
    alert('Anda Login Sebagai Admin');
    document.location = "../admin/";
  </script>
<?php
  // validasi role user
} else if (
  $row['username'] == $username and
  $row['password'] == $password and
  $row['role'] == "USER"
) {
  session_start();
  $_SESSION['id_user'] = $row['id_user'];
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  $_SESSION['role'] = $row['role'];
?>
  <script>
    alert('Anda Login Sebagai User');
    document.location = "../user/";
  </script>
<?php
} else {
?>
  <script>
    alert('Login Gagal');
    document.location = "../guess?page=login";
  </script>
<?php
}
?>