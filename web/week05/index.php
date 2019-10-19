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

  <?php
    if(isset($_POST['formSubmit'])) 
    {
      $users = $_POST['formUsers'];
      
      if(!isset($users)) 
      {
        echo("<p>You didn't select any users!</p>\n");
      } 
      else 
      {
        $nUsers = count($users);
        
        echo("<p>You selected $nUsers countries: ");
        for($i=0; $i < $nUsers; $i++)
        {
          echo($users[$i] . " ");
        }
        echo("</p>");
      }
    }
  ?>

  <p> Select all posts from a user: </p>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <select name="formUsers[]">
      <option>User</option>
      <?php 
      foreach ($db->query('SELECT public.user.display_name AS display_name, public.user.username AS user_name FROM public.USER;') as $row)
      {
        echo '<option value="'. $row['user_name'] . '">' . $row['display_name'] . '</option>';
      }
    ?>
    </select>
    <input type="submit" name="formSubmit" value="Submit">
  </form>

  <?php 
    foreach ($db->query('SELECT public.user.username AS user_name, public.user.display_name AS display_name, public.post.title AS title, public.post.subtitle AS subtitle, public.post.content AS content, public.post.post_date AS post_date FROM public.USER, public.POST WHERE public.USER.ID = public.POST.USER_ID ORDER BY public.post.post_date;')
  as $row)
    {
      echo '<h2>' . $row['title'] . '</h2>';
      echo '<h4>' . $row['subtitle'] . '</h4>';
      echo '<h5> Posted by ' . $row['display_name'] . ' on ' . $row['post_date'] . '</h5>';
      echo '<hr><br/>';
    }
  ?>
</body>

</html>