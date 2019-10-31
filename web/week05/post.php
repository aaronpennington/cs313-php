<?php 
session_start();
include "../includes/db.php"; 
include "../includes/links.php" ?>

<!DOCTYPE html>
<html lang="en">

<body>
  <?php include "../includes/header.php"; ?>

  <div class="container">
    <?php 
    $user_id = $_SESSION["user_id"];
    $post_id = $_GET['id'];
    $_SESSION["current_post_id"] = $post_id;
    foreach ($db->query('SELECT public.user.id AS user_id, public.user.username AS user_name, public.user.display_name AS display_name, public.post.title AS title, public.post.subtitle AS subtitle, public.post.content AS content, public.post.post_date AS post_date FROM public.USER, public.POST WHERE public.POST.ID = '. $post_id . ' AND public.POST.USER_ID = public.USER.ID;') as $row)
    {
      echo '<div id="post_div">';
      echo '<h1 id="post_title">' . $row['title'] . '</h2>';
      echo '<h3 id="post_subtitle">' . $row['subtitle'] . '</h3>';
      echo '<p id="post_text">' . $row['content'] . '</p>';
      echo '<h5> Posted by ' . $row['display_name'] . ' on ' . $row['post_date'] . '</h5>';

      if ($row['user_id'] === $user_id) {
        echo '<button type="button" class="btn btn-outline-primary" onclick="editPost()">Edit</button>';
        echo '<button type="button" class="btn btn-outline-primary">Delete</button>';
      }
      echo '</div>';
    }
    ?>

    <hr>
    <h2>Comments</h2>
    <?php 
      if (isset($_SESSION["user_id"])) {
        echo '<form class="form-group" action="submit_comment.php?postId='. $post_id.'" method="POST"> <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" name="comment"></textarea>
        <button type="submit" class="btn btn-primary">Submit Comment</button>
        </form>';
      }
      else {
        echo '<a class="nav-link" href="../week05/login.php">Log In to Leave a Comment</a>';
      }
    ?>

    <?php 
    echo '<table class="table table-striped">
    <tbody>
    ';

      // List all post comments in the database.
      foreach ($db->query('SELECT public.user.id AS user_id, public.user.username AS user_name, public.user.display_name AS display_name, public.comment.content AS content, public.comment.comment_date AS comment_date FROM public.USER, public.COMMENT, public.POST WHERE public.POST.ID = ' . $post_id . ' AND public.COMMENT.POST_ID = public.POST.ID AND public.COMMENT.USER_ID = public.USER.ID;') as $row)
      {
        // echo '<p>' . $row['content'] . ' - ' . $row['display_name'] . ' at ' . $row['comment_date'] . '</p>';
        // if ($row['user_id'] === $user_id) {
        //   echo '<button type="button" class="btn btn-outline-primary">Edit</button>';
        //   echo '<button type="button" class="btn btn-outline-primary">Delete</button>';
        // }
        
        echo '<tr><td>' . $row['display_name'] . '<br>on' . row['comment_date'] . '</td>';
        echo '<td>' . $row['content'] . '</td></tr>';
        
      }

      echo '</tbody></table>';
    ?>
  </div>
  <?php include "../includes/footer.php"; ?>
</body>

</html>