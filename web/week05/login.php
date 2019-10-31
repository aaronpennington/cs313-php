<?php 
session_start();
include "../includes/db.php"; 
include "../includes/links.php";
?>

<body>
  <?php include "../includes/header.php"; ?>
  <div class="container">
    <?php 
      if (! empty($_GET )){
        if (isset($_GET['login_success'])) {
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Login failed!</strong> Please check your username and password.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
      }
    ?>
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="submit_login.php" method="POST">
              <div class="form-label-group">
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required
                  autofocus>
                <label for="username">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                  required>
                <label for="password">Password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../includes/footer.php"; ?>
</body>