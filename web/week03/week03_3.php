<?php 
  session_start();
  $title="Checkout"; include "header.php"; ?>
<a href="week03_4.php">Confirmation Page</a>

<h1>Shipping Information: </h1>
<form method="post" action="week03_4.php">
  Address: <input type="text" name="address"><br>
  <input type="submit">
</form>
<br>
<a href="week03_2.php"> Return to Cart</a>