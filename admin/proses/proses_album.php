<?php
include "../../koneksi/koneksi.php";
if (isset($_POST['submit_new_album'])) {
  $nama_album = $_POST['namaalbum'];
  $nama_band = $_POST['namaband'];
  $kode_album = $_POST['kodealbum'];
  $slug = $_POST['namaalbum'];
  $slug = str_replace(' ', '-', strtolower($slug));

  $rand = rand();
  $ekstensi = array('png', 'jpeg', 'jpg', 'gif');
  $filename = $_FILES['sampul']['name'];
  $ukuran = $_FILES['sampul']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  $tmp_name = $_FILES['sampul']['tmp_name'];
  if (!in_array($ext, $ekstensi)) {
    header("../");
  } else {
    if ($ukuran < 1044070) {
      $album_title = $rand . '-' . $filename;
      // copy($_FILES['sampul']['tmp_name'], "../../assets/album") . $album_title;
      move_uploaded_file($tmp_name, "..\..\assets\album\\" . $album_title);
      $query = "INSERT INTO `tbl_album` (`id_album`, `band`,`judul_album`,`slug_album`, `sampul`, `kode_album`) VALUES (NULL,'$nama_band', '$nama_album','$slug','$album_title','$kode_album');";
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
  }
}

?>