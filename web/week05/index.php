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

<?php include "db.php"; ?>

<body>
  <header class="masthead container">
    <div class="jumbotron">
      <h1>Susan Bush</h1>
      <p>Susan is a teacher for VIP Kids</p>
    </div>
  </header>

  <div id="nav">
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
        <a href="#" class="navbar-brand">Brand</a>
        <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
          <ul class="nav pull-right navbar-nav">
            <li>
              <form class="navbar-form">
                <input type="text" class="form-control" placeholder="Search">
                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
              </form>
            </li>
            <li>
              <a href="#"><span class="badge">2</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div><!-- /.navbar -->
  </div>

  <div class="container">
    <p> Select all posts from a user: </p>
    <form id="userSelectForm" onchange="submitFormData()" method="post">
      <select id="userList">
        <option value="default">User</option>
        <?php 
      foreach ($db->query('SELECT public.user.display_name AS display_name, public.user.id AS user_id FROM public.USER;') as $row)
      {
        echo '<option value="'. $row['user_id'] . '">' . $row['display_name'] . '</option>';
      }
    ?>
      </select>
    </form>

    <div id="posts">
    </div>
  </div>
</body>

</html>