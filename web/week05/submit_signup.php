<?php 
  session_start();
  include "../includes/db.php";

  $username = $_POST['username'];
  $password = $_POST['password'];
  $display_name = $_POST['display_name'];

  // hash the password here. 

  try {
    $query = 'INSERT INTO public.USER(username, password, display_name) VALUES(:username, :password, :display_name)';

    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password); // store the hashed password
    $statement->bindValue(':display_name', $display_name);
    $statement->execute();

    // Now we bind the values to the placeholders. This does some nice things
    // including sanitizing the input with regard to sql commands.
  }
  catch (Exception $ex)
  {
    // Please be aware that you don't want to output the Exception message in
    // a production environment
    echo "Error with DB. Details: $ex";
    die();
  }

  // // finally, redirect them to a new page to actually show the topics
  header("Location: index.php");

  exit();
?>