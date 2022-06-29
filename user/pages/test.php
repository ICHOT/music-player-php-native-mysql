<body onload="view()">
  <div class="navbar justify-content-center navcolor fixed-top ">
    <nav class="nav nav-masthead mt-1 justify-content-center">
      <a href="?page=logout" class="nav-link nav-text">USER</a>
      <button onclick="view()">Main</button>
      <button onclick="artis()">Artis</button>
      <button class="nav-link nav-text">Album</button>
      <button class="nav-link nav-text">Playlist</button>
      <button class="nav-link nav-text">Love</button>
    </nav>
  </div>
  <div class="navbar mb-5 color-transparant ">
    <container class="navbar-brand text-transparant"></container>
  </div>
  <div class="container-fluid" id="view">
    <div class="row">
      <?php
      $query = "SELECT * FROM tbl_lagu
      JOIN `tbl_band` ON `tbl_lagu`.`kode_band` = `tbl_band`.`kode_band`
      JOIN `tbl_album` ON `tbl_lagu`.`kode_album` = `tbl_album`.`kode_album`";
      $sql = mysqli_query($connect, $query);
      while ($data = mysqli_fetch_array($sql)) {
        $music = $data['judul_lagu'];
        $band = $data['nama_band'];
        $sampul = $data['sampul'];
        // pageing
        echo "  <div class='col-xl-3 col-md-6 mb-4'>";
        echo "  <div class='card border-left-pink shadow h-100 py-2'>";
        echo "    <div class='card-body'>";
        echo "      <div class='row no-gutters align-items-center'>";
        echo "        <div class='col mr-2'>";
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
      }
      ?>
    </div>
  </div>
  <div class="container-fluid" id="view">
    <div class="row">
      <?php
      $query = "SELECT * FROM tbl_lagu
      JOIN `tbl_band` ON `tbl_lagu`.`kode_band` = `tbl_band`.`kode_band`
      JOIN `tbl_album` ON `tbl_lagu`.`kode_album` = `tbl_album`.`kode_album`";
      $sql = mysqli_query($connect, $query);
      while ($data = mysqli_fetch_array($sql)) {
        $music = $data['judul_lagu'];
        $band = $data['nama_band'];
        $sampul = $data['sampul'];
        // pageing
        echo "  <div class='col-xl-3 col-md-6 mb-4'>";
        echo "  <div class='card border-left-pink shadow h-100 py-2'>";
        echo "    <div class='card-body'>";
        echo "      <div class='row no-gutters align-items-center'>";
        echo "        <div class='col mr-2'>";
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
      }
      ?>
    </div>
  </div>
  <div class="container-fluid" id="artis">
    <div class="row">
      <?php
      $query = "SELECT * FROM tbl_lagu
      JOIN `tbl_band` ON `tbl_lagu`.`kode_band` = `tbl_band`.`kode_band`
      JOIN `tbl_album` ON `tbl_lagu`.`kode_album` = `tbl_album`.`kode_album`";
      $sql = mysqli_query($connect, $query);
      while ($data = mysqli_fetch_array($sql)) {
        $music = $data['judul_lagu'];
        $band = $data['nama_band'];
        $sampul = $data['sampul'];
        // pageing
        echo "  <div class='col-xl-3 col-md-6 mb-4'>";
        echo "  <div class='card border-left-pink shadow h-100 py-2'>";
        echo "    <div class='card-body'>";
        echo "      <div class='row no-gutters align-items-center'>";
        echo "        <div class='col mr-2'>";
        echo "          <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>" . $band . "</div>";
        echo "          <div class='h5 mb-0 font-weight-bold text-gray-800'>" . $music . "</div>";
        echo "        </div>";
        echo "        <div class='col-auto'>";
        echo "          <img class='gambaralbum' src='../assets/album/" . $sampul . "' alt='' srcset=''>";
        echo "        </div>";
        echo "      </div>";
        echo "    </div>";
        echo "  </div>";
        echo "artis";
        echo "  </div>";
      }
      ?>
    </div>
  </div>