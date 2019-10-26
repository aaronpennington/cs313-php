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

    <div id="recentPost">
      <h1>Most Recent Post</h1>
      <?php 
        $statement = $db->query('SELECT public.POST.title AS title, public.POST.subtitle AS subtitle, public.POST.content as content, public.POST.post_date AS post_date, public.USER.display_name AS display_name FROM public.POST, public.USER WHERE public.POST.user_id = public.USER.id ORDER BY public.POST.id DESC;');
        
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        echo '<h1>' . $row['title'] . '</h2>';
        echo '<h3>' . $row['subtitle'] . '</h3>';
        echo '<p>' . $row['content'] . '</p>';
        echo '<h5> Posted by ' . $row['display_name'] . ' on ' . $row['post_date'] . '</h5>';
        
      ?>
    </div>
  </div>
</body>

</html>