<?php 
  session_start();
  $title="Shopping Cart"; include "header.php"; ?>
<h1> Shopping Cart </h1><br>
<h2> Items in Cart: </h2>
<ul>
  <!-- some php here -->
</ul>
<br>
<a href="week03_3.php">Checkout</a>
<br>
<?php echo $_POST["price"]; ?>