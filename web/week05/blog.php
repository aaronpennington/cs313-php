<?php 
session_start();

if ( isset( $_SESSION["user_id"] ) ) {
  $user_id = $_SESSION["user_id"];
} else {
  // Redirect them to the login page
  header("Location: login.php");
}

include "../includes/db.php";
include "../includes/links.php" ?>

<!DOCTYPE html>
<html lang="en">

<body>
  <?php 
  $active_li_post = "active";
  include "../includes/header.php"; ?>

  <div class="container">
    <form action="../week05/insert.php" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputTitle">Title</label>
          <input type="text" class="form-control" name="inputTitle" placeholder="Title">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputSubtitle">Subtitle</label>
          <input type="text" class="form-control" name="inputSubtitle">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputContent">Post Text</label>
          <textarea rows=10 class="form-control" name="inputContent"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit Post</button>
    </form>
  </div>

  <?php include "../includes/footer.php"; ?>
</body>

</html>