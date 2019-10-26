<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <script src="scripts.js"></script>
  <title>Susan Bush's Blog</title>
</head>

<?php include "../includes/db.php"; ?>

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
          <input type="textarea" class="form-control" name="inputContent">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit Post</button>
    </form>
  </div>
</body>

</html>