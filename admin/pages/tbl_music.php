<body>
  <div class="navbar justify-content-center navcolor fixed-top ">
    <nav class="nav nav-masthead mt-1 justify-content-center">
      <a href="?page=logout" class="nav-link nav-text">ADMIN</a>
      <a href="?page=tmb_lagu" class="nav-link nav-text">Tambah Lagu</a>
      <a href="?page=tmb_album" class="nav-link nav-text">Tambah Album</a>
      <a href="?page=tmb_band" class="nav-link nav-text">Tambah Band</a>

    </nav>
  </div>
  <div class="navbar mb-5 color-transparant ">
    <container class="navbar-brand text-transparant"></container>
  </div>
  <!-- Tables -->
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables - Music</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <!-- <th>Image</th> -->
                <th>Title Song</th>
                <th>Band / Artis</th>
                <th>Kode Music</th>
                <th>Inspect</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT `tbl_lagu`.`judul_lagu`,
              `tbl_lagu`.`kode_lagu`,
              `tbl_band`.`nama_band`
              FROM `tbl_lagu` INNER JOIN `tbl_band` ON `tbl_band`.`kode_band` =
              `tbl_lagu`.`kode_band`";

              $sql = mysqli_query($connect, $query);
              while ($data = mysqli_fetch_array($sql)) {
                echo "<tr>";
                // echo "<td>" . "- " . "</td>";
                echo "<td>" . $data['judul_lagu'] . "</td>";
                echo "<td>" . $data['nama_band'] . "</td>";
                echo "<td>" . $data['kode_lagu'] . "</td>";
                echo "<td> <a class='btn btn-info' href='?page=info_music&&id=" . $data['kode_lagu'] . "'>Info</a> </td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="navbar  fixed-bottom navcolor justify-content-center ">
    <a href="?page=table_band" class=" nav-link nav-text">DataTable Band</a>
    <a href="?page=table_album" class="nav-link nav-text">DataTable Album</a>
    <a href="?page=table_music" class="btn btn-login nav-link nav-text">DataTable Music</a>
    <nav class="navbar-brand float-md-end"><a>

      </a></nav>
  </div>
  <div class="navbar mb-3 bg-transparant ">
    <container class="navbar-brand "></container>
  </div>