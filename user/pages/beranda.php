<body onload="love()">
  <div class="navbar justify-content-center navcolor fixed-top ">
    <nav class="nav nav-masthead mt-1 justify-content-center">
      <a href="?page=logout" class="nav-link nav-text">USER</a>
      <a onclick="main()" class="nav-link nav-text">Main</a>
      <a onclick="artis()" class="nav-link nav-text">Artis</a>
      <a onclick="album()" class="nav-link nav-text">Album</a>
      <a onclick="playlist()" class="nav-link nav-text">Playlist</a>
      <a onclick="love()" class="nav-link nav-text">Love</a>
    </nav>
  </div>
  <div class="navbar mb-5 color-transparant ">
    <container class="navbar-brand text-transparant"></container>
  </div>
  <!-- main page -->
  <?php
  include "items/main.php";
  include "items/artis.php";
  include "items/album.php";
  // include "items/albumsong.php";
  // include "items/bandsongs.php";
  include "items/playlist.php";
  include "items/love.php";
  ?>
  <!-- end of main page -->

  <div class="navbar  fixed-bottom navcolor ">
    <nav class="navbar-brand float-md-end"><a>

      </a></nav>
  </div>
  <div class="navbar mb-3 bg-transparant ">
    <container class="navbar-brand "></container>
  </div>