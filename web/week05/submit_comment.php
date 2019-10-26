<?php
  session_start();
  include "../includes/db.php";
  
  $user_id = $_SESSION["user_id"];
  $text = $_POST['comment'];
  $post_id = $_GET['postId'];

  echo $post_id;

  try
  {
     $query = 'INSERT INTO public.COMMENT(content, comment_date, post_id, user_id) VALUES(:content, :comment_date, :post_id, :user_id)';
     $statement = $db->prepare($query);
     $statement->bindValue(':content', $text);
     $statement->bindValue(':comment_date', '\'now()\'');
     $statement->bindValue(':post_id', strval($post_id));
     $statement->bindValue(':user_id', $user_id);
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
  
  // finally, redirect them to a new page to actually show the topics
  header("Location: post.php?id=".$post_id);
  
  exit();

  echo $text;
?>