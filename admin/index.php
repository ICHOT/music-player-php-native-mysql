<?php
include "templates/header.php";
// include 'templates/headerSbadmin.php';

if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'logout':
      include "../login/logout.php";
      break;
      // Fungsion 
    case 'tmb_album':
      include "pages/tmb_album.php";
      break;
    case 'tmb_band':
      include "pages/tmb_band.php";
      break;
    case 'tmb_lagu':
      include "pages/tmb_lagu.php";
      break;
      // Info Management
    case 'info_band':
      include "pages/info_band.php";
      break;
      // DataTables
    case 'table_band':
      include "pages/tbl_band.php";
      break;
    case 'table_album':
      include "pages/tbl_album.php";
      break;
    case 'table_music':
      include "pages/tbl_music.php";
      break;

    default:
      include "pages/beranda.php";
      break;
  }
} else {
  include "pages/beranda.php";
}

// include 'templates/footerSbadmin.php';
include "templates/footer.php";
