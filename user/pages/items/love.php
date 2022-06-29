<div class="container-fluid box" id="love">
  <div class="row">
    <?php
    $sesi = $_SESSION['id_user'];
    $query = "SELECT  `love_test`.`id_user`,
    `love_test`.`kode_lagu`,
    `tbl_lagu`.`judul_lagu`,
    `tbl_album`.`sampul`,
    `tbl_lagu`.`music`,
    `tbl_lagu`.`slug`,
    `tbl_lagu`.`kode_album`,
    `tbl_band`.`nama_band`,
    `tbl_lagu`.`kode_lagu` FROM `tbl_lagu` INNER JOIN `love_test` ON
    `love_test`.`kode_lagu` = `tbl_lagu`.`kode_lagu`
    JOIN `tbl_band` ON `tbl_lagu`.`kode_band` = `tbl_band`.`kode_band`
    JOIN `tbl_album` ON `tbl_lagu`.`kode_album` = `tbl_album`.`kode_album`
    INNER JOIN `account` ON `love_test`.`id_user` = `account`.`id_user`
    WHERE `account`.`id_user`='$sesi'";


    $sql = mysqli_query($connect, $query);
    // $id = $_SESSION['id_user'];
    while ($data = mysqli_fetch_array($sql)) {
      $music = $data['judul_lagu'];
      $band = $data['nama_band'];
      $sampul = $data['sampul'];
      $slug = $data['slug'];
      // $kl = $data['kode_lagu'];
      // pageing
      echo "  <div class='col-xl-3 col-md-6 mb-4'>";
      echo "  <div class='card border-left-pink shadow h-100 py-2'>";
      echo "    <div class='card-body'>";
      echo "      <div class='row no-gutters align-items-center'>";
      echo "        <div class='col mr-2'>";
      echo "        <a href='?unlove=" . $slug . "'><div class='text-xs font-weight-bold text-danger text-uppercase mb-1 fas fa-heart'></div></a>";
      echo "          <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>" . $band . "</div>";
      echo "          <div class='h5 mb-0 font-weight-bold text-gray-800'>" . $music . "</div>";
      echo "        </div>";
      echo "        <div class='col-auto'>";
      echo "          <img class='gambaralbum' src='../assets/album/" . $sampul . "' alt='' srcset=''>";
      echo "        </div>";
      echo "      </div>";
      echo "    </div>";
      echo "  </div>";
      echo "  </div>";
      // var_dump($data);
    }
    ?>
  </div>
</div>

<?php
$a = "SELECT * FROM tbl_lagu";
$s = mysqli_query($connect, $a);
$sesi = $_SESSION['id_user'];
while ($d = mysqli_fetch_array($s)) {
  $k = ($d['slug']);
  $kl = ($d['kode_lagu']);
  // var_dump($d);
  if (isset($_GET['unlove'])) {
    switch ($_GET['unlove']) {
      case $k:
        // echo ($kl);
        $Q_update = "UPDATE `tbl_lagu` SET `status` = 'dark'
        WHERE `tbl_lagu`.`kode_lagu` = '$kl';";

        $Q_hapus = "DELETE FROM love_test WHERE
        kode_lagu='$kl'";
        $sql = mysqli_query($connect, $Q_update);
        $sql = mysqli_query($connect, $Q_hapus);
        // header("Location: user");
?>
        <script>
          // alert("data berhasil dihapus")
          document.location = "../"
        </script>
<?php
        break;
    }
  }
}
?>