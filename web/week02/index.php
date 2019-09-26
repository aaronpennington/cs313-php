<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Week 02</title>
  <style>
  #div1 {
    background-color: lightblue;
  }

  #div2 {
    background-color: yellow;
  }
  </style>
</head>

<body>
  <h1> PHP TEST </h1>
  <?php for ($i = 0; $i < 10; $i++) { ?>
  <div id="<?php 
    if ($i % 2 == 0) {
    echo "div1";
    }
    else {
      echo "div2";
    } ?>">
    <?php echo "DIV $i HERE!";} 
    ?>
</body>

</html>