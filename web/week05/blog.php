<!DOCTYPE html>
<html lang="en">

<?php include "../includes/db.php"; 
include "../includes/links.php" ?>

<body>
  <?php include "../includes/header.php"; ?>

  <div class="container">
    <form action="insert.php" method="POST">
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
      <input type="submit" class="btn btn-primary">Submit Post
    </form>
  </div>
</body>

</html>