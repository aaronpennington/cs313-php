<?php 
  session_start();
  $title="Confirmation"; include "header.php"; 
  if (isset($_POST['address'])){
    $address = $_POST["address"];
  }
  else {
    $address = "";
  }
?>

<h1>Confirmation of Purchase</h1>
<h2> Shipping to: </h2>

<?php 
  echo $address;
?>