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
    <?php 
    $post_id = $_GET['id'];
    foreach ($db->query('SELECT public.user.username AS user_name, public.user.display_name AS display_name, public.post.title AS title, public.post.subtitle AS subtitle, public.post.content AS content, public.post.post_date AS post_date FROM public.USER, public.POST WHERE public.POST.ID = '. $post_id . ' AND public.POST.USER_ID = public.USER.ID;') as $row)
    {
      echo '<h1>' . $row['title'] . '</h2>';
      echo '<h3>' . $row['subtitle'] . '</h3>';
      echo '<p>' . $row['content'] . '</p>';
      echo '<h5> Posted by ' . $row['display_name'] . ' on ' . $row['post_date'] . '</h5>';
    }

  ?>
  </div>
</body>

</html>