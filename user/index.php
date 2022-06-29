<?php
include "templates/header.php";
// include '../templates/header.php';

if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'logout':
      include "../login/logout.php";
      break;
    default:
      include "pages/beranda.php";
      break;
  }
} else {
  include "pages/beranda.php";
}

include "templates/footer.php";
