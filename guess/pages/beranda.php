<body>
  <div class="navbar  navcolor fixed-top ">
    <nav class="nav nav-masthead mt-1 justify-content-center">
      <a href="?page=login" class="nav-link nav-text">Login</a>
    </nav>
  </div>
  <div class="navbar mb-5 color-transparant ">
    <container class="navbar-brand text-transparant"></container>
  </div>
  <div class="container-fluid">
    <div class="row">
      <?php

      $query = "SELECT * FROM tbl_lagu
      JOIN `tbl_band` ON `tbl_lagu`.`kode_band` = `tbl_band`.`kode_band`
      JOIN `tbl_album` ON `tbl_lagu`.`kode_album` = `tbl_album`.`kode_album`";
      $sql = mysqli_query($connect, $query);
      while ($data = mysqli_fetch_array($sql)) {
        // var_dump($data);
        $title = $data['judul_lagu'];
        $band = $data['nama_band'];
        $sampul = $data['sampul'];
        $kode_music = $data['slug'];
        $music = $data['music'];
        // pageing
        echo "  <div class='col-xl-3 col-md-6 mb-4'>";
        echo "  <div class='card border-left-pink shadow h-100 py-2'>";
        echo "    <div class='card-body'>";
        echo "      <div class='row no-gutters align-items-center'>";
        echo "        <div class='col mr-2'>";
        echo "          <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>" . $band . "</div>";
        echo "          <div class='h5 mb-0 font-weight-bold text-gray-800'>" . $title . "</div>";
        echo "        </div>";
        echo "        <div class='col-auto'>";
        echo "          <a href='?play=" . $kode_music . "' ><img class='gambaralbum' src='../assets/album/" . $sampul . "' alt='' srcset=''></a>";
        echo "        </div>";
        echo "      </div>";
        echo "    </div>";
        // echo $kode_music;
        echo "  </div>";
        echo "  </div>";
      }
      ?>
    </div>
  </div>
  <!-- <div class="navbar  fixed-bottom navcolor ">
    <nav class="navbar-brand float-md-end"><a> -->
  <!-- <div class="container"> -->
  <?php
  $a = "SELECT * FROM tbl_lagu";
  $s = mysqli_query($connect, $a);
  while ($d = mysqli_fetch_array($s)) {
    $k = ($d['slug']);
    $m = ($d['music']);
    $t = $d['judul_lagu'];
    if (isset($_GET['play'])) {
      switch ($_GET['play']) {
        case $k:
          echo "  <div class='navbar  fixed-bottom navcolor '>";
          echo "  <nav class='navbar-brand float-md-end' >";
          echo "  <b class='fonttitle'>" . $t . "</b>";
          echo "  <div class='container'>";
          echo "  <audio controls >";
          echo "  <source src='../assets/music/" . $m . "' type='audio/mpeg' />";
          echo " </audio>";
      }
    }
  }




  ?>
  </a></nav>
  </div>
  <div class="navbar mb-3 bg-transparant ">
    <container class="navbar-brand "></container>
  </div>