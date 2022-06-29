<?php
include "../templates/header.php"

?>

<body class="text-center bg-login">
  <main class="form-signin">
    <form method="POST" action="../login/proses_login.php">
      <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <h1 class="h3 mb-3 fw-normal">Hot Music Login</h1>

      <div class="form-floating">
        <input type="text" class="form-control" name="username" placeholder="username">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>


      <button class="w-100 btn btn-lg btn-login" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
  </main>
  <?php
  include "../templates/footer.php"

  ?>