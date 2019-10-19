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
    foreach ($db->query('SELECT content, post_date FROM public.post') as $row)
    {
      echo '<h2>' . $row['post_date'] . '</h2>';
      echo '<h2>' . $row['content'] . '</h2>';
      echo '<br/>';
    }
  ?>
</body>

</html>