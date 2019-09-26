<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aaron Pennington Homepage</title>
  <style>
  #div1 {
    background-color: seagreen;
  }

  #div2 {
    background-color: gray;
  }
  </style>
</head>

<body>
  <h1> Weekly Assignments </h1>
  <ul>
    <li><a href="week01/hello.html">Week 01</a></li>
    <li><a href="week02/index.php">Week 02</a></li>
  </ul>

  <h1> PHP TEST </h1>
  <?php for ($i = 0; $i <= 10; $i++) {
  echo "<div id=";
    if ($i % 2 == 0) {
      echo "div1";
    }
    else {
      echo "div2";
    } 
  echo "> DIV $i HERE!";
  echo "</div>";}
  ?>
  <br>
  <?php
    $num = 128 * 256;
    echo "128 * 256 = $num";
    echo "<br>Look, I can do PHP!";
  ?>
</body>

</html>