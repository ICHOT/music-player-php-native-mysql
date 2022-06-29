<?php
include "../../koneksi/koneksi.php";
if (isset($_POST['submit_new_band'])) {
  $id_band = $_POST['idband'];
  $nama_band = $_POST['namaband'];
  $slug = $_POST['namaband'];
  $slug = str_replace(' ', '-', strtolower($slug));
  $query = "INSERT INTO `tbl_band` (`id_band`, `nama_band`,`slug_band`, `kode_band`) VALUES (NULL, '$nama_band', '$slug','$id_band');";
  $sql = mysqli_query($connect, $query);
  if ($sql) {
?>
    <script>
      alert("data berhasil ditambah")
      document.location = "../"
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("data gagal ditambahkan");
      window.history.go(-1);
    </script>
<?php
  }
}
?>