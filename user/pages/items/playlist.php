<div class="container-fluid box" id="playlist">
  <div class="row">
    <?php
    $query = "SELECT * FROM tbl_band";
    $sql = mysqli_query($connect, $query);
    while ($data = mysqli_fetch_array($sql)) {
      // $music = $data['judul_lagu'];
      // $band = $data['nama_band'];
      // $sampul = $data['sampul'];
      $nama_band = $data['nama_band'];
      // pageing
      echo "  <div class='col-xl-3 col-md-6 mb-4'>";
      echo "  <div class='card border-left-pink shadow h-100 py-2'>";
      echo "    <div class='card-body'>";
      echo "      <div class='row no-gutters align-items-center'>";
      echo "        <div class='col mr-2'>";
      echo "          <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>" . "xx" . "</div>";
      echo "          <div class='h5 mb-0 font-weight-bold text-gray-800'>" . "Playlist" . "</div>";
      echo "        </div>";
      echo "        <div class='col-auto'>";
      echo "          <img class='gambaralbum' src='../assets/album/" . "xx" . "' alt='' srcset=''>";
      echo "        </div>";
      echo "      </div>";
      echo "    </div>";
      echo "  </div>";
      echo "  </div>";
    }
    ?>
  </div>
</div>