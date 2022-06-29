<?php
$query = "SELECT max(id_album) as maxKode FROM
tbl_album";
$hasil = mysqli_query($connect, $query);
$data = mysqli_fetch_array($hasil);
$kode = $data['maxKode'];
$noUrut = (int) substr($kode, 0, 4);
$noUrut++;
$char = "ALBUM-";
$newID = $char . sprintf("%04s", $noUrut);
//Substring
?>

<body class="text-center bg-login">
  <main class="form-signin">
    <form method="POST" action="proses/proses_album.php" enctype="multipart/form-data">
      <h1 class="h3 mb-3 fw-normal">Tambah Album</h1>

      <div class="form-floating">
        <input type="text" class="form-control" value="<?php echo $newID; ?>" readonly name="kodealbum" placeholder="Kode Album">
        <label for="floatingInput">Kode Album</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="namaalbum" placeholder="Nama Album">
        <label for="floatingInput">Nama Album</label>
      </div>
      <div class="form-floating">
        <select type="text" class="form-control" name="namaband" placeholder="Band">
          <?php
          $sql = "SELECT * FROM tbl_band";
          $qry = mysqli_query($connect, $sql);
          while ($hsl = mysqli_fetch_array($qry)) {
            echo "<option value='$hsl[kode_band]'>$hsl[nama_band]</option>";
          }
          ?>
        </select>
        <label for="floatingInput">Band</label>
      </div>
      <div class="form-floating">
        <input type="file" class="form-control" name="sampul" id="sampul" placeholder="Image">
        <label for="floatingPassword">Sampul</label>
      </div>

      <button class="w-100 btn btn-lg btn-login" name="submit_new_album" type="submit">Simpan</button>
    </form>
  </main>