<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Susan Bush</title>
</head>

<?php include "db.php"; ?>

<body>
  <?php 
    foreach ($db->query('SELECT public.user.username AS user_name, public.user.display_name AS display_name, public.post.content AS content, public.post.post_date AS post_date FROM public.USER, public.POST WHERE public.USER.ID = public.POST.USER_ID ORDER BY public.user.username;')
  as $row)
    {
      echo '<h2>' . $row['post_date'] . ' - ' . $row['display_name'] . '</h2>';
      echo '<h2>' . $row['content'] . '</h2>';
      echo '<h3>Published by ' . $row['user_name'] . '</h3>';
      echo '<br/>';
    }
  ?>
</body>

</html>