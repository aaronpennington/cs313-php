<?php 
session_start();
include "../includes/db.php"; 
include "../includes/links.php" ?>

<body>
  <?php include "../includes/header.php"; 
  $active_li_signup = "active"?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signup" action="submit_signup.php" method="POST">

              <div class="form-label-group">
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required
                  autofocus>
                <label for="username">Username</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="display_name" name="display_name" class="form-control" placeholder="Display Name"
                  required autofocus>
                <label for="display_name">Display Name</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                  required>
                <label for="password">Password</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="verify_password" name="verify_password" class="form-control"
                  placeholder="Verify Password" onkeyup="verifyPassword();" required>
                <label for="verify_password">Confirm Password</label>
                <span id="confirm-message" class="confirm-message"></span>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../includes/footer.php"; ?>
</body>