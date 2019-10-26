<!DOCTYPE html>
<html lang="en">

<?php include "../includes/db.php"; 
include "../includes/links.php" ?>

<body>
  <?php include "../includes/header.php"; ?>

  <div class="container">
    <?php 
    $post_id = $_GET['id'];
    foreach ($db->query('SELECT public.user.username AS user_name, public.user.display_name AS display_name, public.post.title AS title, public.post.subtitle AS subtitle, public.post.content AS content, public.post.post_date AS post_date FROM public.USER, public.POST WHERE public.POST.ID = '. $post_id . ' AND public.POST.USER_ID = public.USER.ID;') as $row)
    {
      echo '<h1>' . $row['title'] . '</h2>';
      echo '<h3>' . $row['subtitle'] . '</h3>';
      echo '<p>' . $row['content'] . '</p>';
      echo '<h5> Posted by ' . $row['display_name'] . ' on ' . $row['post_date'] . '</h5>';
    }
    ?>

    <hr>
    <h2>Comments</h2>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
    <?php 
      foreach ($db->query('SELECT public.user.username AS user_name, public.user.display_name AS display_name, public.comment.content AS content, public.comment.comment_date AS comment_date FROM public.USER, public.COMMENT, public.POST WHERE public.POST.ID = ' . $post_id . ' AND public.COMMENT.POST_ID = public.POST.ID AND public.COMMENT.USER_ID = public.USER.ID;') as $row)
      {
        echo '<p>' . $row['content'] . ' - ' . $row['display_name'] . ' at ' . $row['comment_date'] . '</p>';
      }
    ?>
  </div>
</body>

</html>