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

<?php include "../includes/db.php"; 
include "../includes/links.php" ?>

<body>
  <?php include "../includes/header.php"; ?>

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

    <hr>
    <h2>Comments</h2>
    <?php 
      foreach ($db->query('SELECT public.user.username AS user_name, public.user.display_name AS display_name, public.comment.content AS content, public.comment.comment_date AS comment_date FROM public.USER, public.COMMENT, public.POST WHERE public.POST.ID = ' . $post_id . ' AND public.COMMENT.POST_ID = public.POST.ID AND public.COMMENT.USER_ID = public.USER.ID;') as $row)
      {
        echo '<p>' . $row['content'] . ' - ' . $row['display_name'] . ' at ' . $row['comment_date'] . '</p>';
      }
    ?>
  </div>
</body>

</html>