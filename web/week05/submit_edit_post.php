<?php
session_start();
include "../includes/db.php";
include "../includes/links.php";

$post_id = $_SESSION['current_post_id'];
$post_title = $_POST['post_title'];
$post_subtitle = $_POST['post_subtitle'];
$post_text = $_POST['post_text'];

// UPDATE DATABASE HERE
// $query = 'UPDATE public.POST SET public.post.title='.$post_title.', public.post.subtitle='.$post_subtitle.', public.post.content=' . $post_text . ' WHERE public.post.id='.$post_id;

// $db->query($query);

try {
  $query = 'UPDATE public.POST SET public.post.title=:post_title, public.post.subtitle=:post_subtitle, public.post.content=:post_text WHERE public.post.id=:post_id';

  $statement = $db->prepare($query);
  $statement->bindValue(':post_title', $post_title);
  $statement->bindValue(':post_subtitle', $post_subtitle);
  $statement->bindValue(':post_text', $post_text);
  $statement->bindValue(':post_id', $post_id);
  $statement->execute();

}
catch (Exception $ex)
{
  // Please be aware that you don't want to output the Exception message in
  // a production environment
  echo "Error with DB. Details: $ex";
  die();
}

// redirect to the post
header("Location: post.php?id=".$post_id);
  
exit();
?>