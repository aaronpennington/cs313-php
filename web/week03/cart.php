<?php
  session_start();
  function cart() {
      $_SESSION['cartCost'] .= $_POST['price'];
  }
?>