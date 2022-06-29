<?php
include "../../koneksi/koneksi.php";
if (isset($_POST['submit_new_lagu'])) {
  $id_lagu = $_POST['idlagu'];
  // $kode_lagu = $_POST['kodelagu'];
  $judul_lagu = $_POST['judullagu'];
  $kode_album = $_POST['judulalbum'];
  $kode_band = $_POST['namaband'];
  $slug = $_POST['judullagu'];
  $slug = str_replace(' ', '-', strtolower($slug));

  $rand = rand();
  $ekstensi = array('mp3', 'm4a');
  $filename = $_FILES['filemusic']['name'];
  $ukuran = $_FILES['filemusic']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  $temp_name = $_FILES['filemusic']['tmp_name'];
  if (!in_array($ext, $ekstensi)) {
    header("../");
  } else {
    if ($ukuran < 50000000) {
      $music_title = $rand . '-' . $filename;
      move_uploaded_file($temp_name, "..\..\assets\music\\" . $music_title);
      $query = "INSERT INTO `tbl_lagu` (`id_lagu`, `judul_lagu`,`music`,`slug`, `kode_lagu`, `kode_album`,`kode_band`,`status`) VALUES (NULL, '$judul_lagu','$music_title', '$slug','$id_lagu','$kode_album','$kode_band','dark');";
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