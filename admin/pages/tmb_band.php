<?php
//Auto Number
$query = "SELECT max(id_band) as maxKode FROM
tbl_band";
$hasil = mysqli_query($connect, $query);
$data = mysqli_fetch_array($hasil);
$kode = $data['maxKode'];
$noUrut = (int) substr($kode, 0, 4);
$noUrut++;
$char = "BAND-";
$newID = $char . sprintf("%04s", $noUrut);
//Substring
?>

<body class="text-center bg-login">
  <main class="form-signin">
    <form method="POST" action="proses/proses_band.php" enctype="multipart/form-data">
      <!-- <img class=" mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <h1 class="h3 mb-3 fw-normal">Tambah Band</h1>

      <div class="form-floating">
        <input type="text" class="form-control" value="<?php echo $newID; ?>" name="idband" readonly placeholder="Member">
        <label for="floatingInput">ID Band</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="namaband" placeholder="Nama Band">
        <label for="floatingInput">Nama Band</label>
      </div>
      <button class="w-100 btn btn-lg btn-login" name="submit_new_band" type="submit">Simpan</button>
      <!-- <p class="mt-5 mb-3 text-muted">&copy; 2022</p> -->
    </form>
  </main>