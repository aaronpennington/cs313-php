<?php
  session_start();
  include "../includes/db.php";
  include "../includes/links.php";

  $post_id = $_SESSION['current_post_id'];

  try {
    $query = 'DELETE FROM POST WHERE id=:post_id';
  
    $statement = $db->prepare($query);
    $statement->bindValue(':post_id', $post_id);
    $statement->execute();
  }
  catch (Exception $ex)
  {
    echo "Error with DB. Details: $ex";
    die();
  }

  header("Location: index.php");
  exit();
?>