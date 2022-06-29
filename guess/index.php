<?php
include "templates/header.php";
// include '../templates/header.php';

if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'login':
      include "../login/index.php";
      break;
    case 'test':
      include "pages/test.php";
      break;
    default:
      include "pages/beranda.php";
      break;
  }
} else {
  include "pages/beranda.php";
}

include "templates/footer.php";
