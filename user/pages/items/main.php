<!-- <div class="container-fluid box"> -->
<div class="container-fluid box" id="main">
  <div class="row">
    <?php
    $query = "SELECT * FROM tbl_lagu
    -- `tbl_lagu`.`status` FROM `love_test`  INNER JOIN `tbl_lagu`;
      JOIN `tbl_band` ON `tbl_lagu`.`kode_band` = `tbl_band`.`kode_band`
      JOIN `tbl_album` ON `tbl_lagu`.`kode_album` = `tbl_album`.`kode_album`";

    $sql = mysqli_query($connect, $query);
    $sesi = $_SESSION['id_user'];
    $query2 = "SELECT * FROM love_test";
    $sql2 = mysqli_query($connect, $query2);
    while ($data = mysqli_fetch_array($sql)) {
      $music = $data['judul_lagu'];
      $band = $data['nama_band'];
      $sampul = $data['sampul'];
      $slug = $data['slug'];
      $kl = $data['kode_lagu'];
      $love_status = $data['status'];
      // $iduser = $data['id_user'];
      // echo $slug;
      // pageing
      echo "  <div class='col-xl-3 col-md-6 mb-4'>";
      echo "  <div class='card border-left-pink shadow h-100 py-2'>";
      echo "    <div class='card-body'>";
      echo "      <div class='row no-gutters align-items-center'>";
      echo "        <div class='col mr-2'>";
      // echo "          <a href='?love=" . $slug . "'><div class='text-xs font-weight-bold text-transparant text-uppercase mb-1 fas fa-heart'></a>" . "" . "</div>";
      // if ($iduser == $sesi) {
      echo "        <a href='?love=" . $slug . "'><div class='text-xs font-weight-bold text-" . $love_status . " text-uppercase mb-1 fas fa-heart'></div></a>";
      // } else {

      //   echo "        <a href='?love=" . $slug . "'><div class='text-xs font-weight-bold text-dark text-uppercase mb-1 fas fa-heart'></div></a>";
      // }



      echo "          <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>" . $band . "</div>";
      echo "          <div class='h5 mb-0 font-weight-bold text-gray-800'>" . $music . "</div>";
      echo "        </div>";

      echo "        <div class='col-auto '>";
      echo "          <img class='gambaralbum' src='../assets/album/" . $sampul . "' alt='' srcset=''>";
      echo "        </div>";
      echo "      </div>";
      echo "    </div>";
      echo "  </div>";
      echo "  </div>";
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
  if (isset($_GET['love'])) {
    switch ($_GET['love']) {
      case $k:
        // echo ($kl);
        $Q_update = "UPDATE `tbl_lagu` SET `status` = 'danger'
        WHERE `tbl_lagu`.`kode_lagu` = '$kl';";

        $Q = "INSERT INTO `love_test`(`id`,`kode_lagu`,`id_user`)VALUES (NULL,'$kl',$sesi);";
        $sql = mysqli_query($connect, $Q_update);
        $sql = mysqli_query($connect, $Q);
        // header("Location: user");
?>
        <script>
          // alert("data berhasil ditambah")
          document.location = "../"
        </script>
<?php
        break;
    }
  }
}
?>