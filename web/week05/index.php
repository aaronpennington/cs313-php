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
  
    foreach ($db->query('SELECT public.user.name AS "User Name",
                        public.post.content AS "Post Content",
                        public.post.post_date AS "Post Date",
                        FROM public.USER,
                        public.POST,
                        WHERE public.USER.ID = public.POST.USER_ID
                        ORDER BY public.user.name;')
  as $row)
    {
      echo '<h2>' . $row['post_date'] . '</h2>';
      echo '<h2>' . $row['content'] . '</h2>';
      echo '<br/>';
    }
  ?>
</body>

</html>