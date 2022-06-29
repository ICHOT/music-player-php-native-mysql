<?php
// error_reporting(0);
include "../koneksi/koneksi.php";
session_start();
if (empty($_SESSION['id_user'])) {
?>
  <script>
    alert("SILAHKAN LOGIN TERLEBIH DAHULU");
    document.location = "../login/";
  </script>
<?php
}
$id_user = $_SESSION['id_user'];
$akses = "SELECT * FROM account WHERE id_user = '$id_user'";
$sql = mysqli_query($connect, $akses);
$row = mysqli_fetch_array($sql);
$akses1 = $row['role'];
if ($akses1 != "USER") {
?>

  <script>
    alert(" ANDA TIDAK MEMILIKI AKSES KE HALAMAN INI");
    // document.location = "../login/";
  </script>
  <?php
  if ($akses1 == "ADMIN") {
  ?>
    <script>
      document.location = "../admin/";
    </script>
<?php
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ha</title>

  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/mycss.css" rel="stylesheet">
  <link href="../assets/css/user.css" rel="stylesheet">
  <link href="../assets/fontawesome//css/all.min.css" rel="stylesheet">
</head>