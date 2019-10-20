<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <script src="scripts.js"></script>
  <title>Susan Bush's Blog</title>
</head>

<?php include "db.php"; ?>

<body>
  <div class="jumbotron">
    <h1>Susan Bush</h1>
    <p>Susan is a teacher for VIPKids!</p>
  </div>

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
</body>

</html>