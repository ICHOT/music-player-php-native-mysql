<?php
//Auto Number
$query = "SELECT max(id_lagu) as maxKode FROM
tbl_lagu";
$hasil = mysqli_query($connect, $query);
$data = mysqli_fetch_array($hasil);
$kode = $data['maxKode'];
$noUrut = (int) substr($kode, 0, 4);
$noUrut++;
$char = "LAGU-";
$newID = $char . sprintf("%04s", $noUrut);
//Substring
?>

<body class="text-center bg-login">
  <main class="form-signin">
    <form method="POST" action="proses/proses_lagu.php" enctype="multipart/form-data">
      <h1 class=" h3 mb-3 fw-normal">Tambah Lagu</h1>
      <div class="form-floating">
        <input type="text" class="form-control" value="<?php echo $newID; ?>" name="idlagu" readonly placeholder="id">
        <label for="floatingInput">ID Band</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="judullagu" placeholder="Judul Lagu" required>
        <label for="floatingInput">Judul Lagu</label>
      </div>
      <div class="form-floating">
        <input type="file" class="form-control" name="filemusic" placeholder="music" required>
        <label for="floatingInput">Judul Lagu</label>
      </div>
      <div class="form-floating">
        <select type="text" class="form-control" name="namaband" placeholder="Judul Album" required>
          <?php
          $sql = "SELECT * FROM tbl_band";
          $qry = mysqli_query($connect, $sql);
          while ($hsl = mysqli_fetch_array($qry)) {
            echo "<option value='$hsl[kode_band]'>$hsl[nama_band]</option>";
          }
          ?>
        </select>
        <label for="floatingInput">Nama Band</label>
      </div>
      <div class="form-floating">
        <select type="text" class="form-control" name="judulalbum" placeholder="Judul Album" required>
          <?php
          $sql = "SELECT * FROM tbl_album";
          $qry = mysqli_query($connect, $sql);
          while ($hsl = mysqli_fetch_array($qry)) {
            echo "<option value='$hsl[kode_album]'>$hsl[judul_album]</option>";
          }
          ?>
        </select>
        <label for="floatingInput">Judul Album</label>
      </div>

      <button class="w-100 btn btn-lg btn-login" name="submit_new_lagu" type="submit">Simpan</button>
      <!-- <p class="mt-5 mb-3 text-muted">&copy; 2022</p> -->
    </form>
  </main>