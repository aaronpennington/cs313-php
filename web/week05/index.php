<!DOCTYPE html>
<html lang="en">

<?php include "../includes/db.php"; 
include "../includes/links.php" ?>

<body>
  <?php include "../includes/header.php"; ?>

  <div class="container">
    <p> Select all posts from a user: </p>
    <form id="userSelectForm" onchange="submitFormData()" method="post">
      <select id="userList">
        <option value="default">User</option>
        <?php 
          foreach ($db->query('SELECT public.user.display_name AS display_name, public.user.id AS user_id FROM public.USER;') as $row)
          {
            echo '<option value="'. $row['user_id'] . '">' . $row['display_name'] . '</option>';
          }
        ?>
      </select>
    </form>

    <div id="posts">
    </div>

    <div id="recentPost">
      <h1>Most Recent Post</h1>
      <?php 
        $statement = $db->query('SELECT public.POST.title AS title, public.POST.subtitle AS subtitle, public.POST.content as content, public.POST.post_date AS post_date, public.USER.display_name AS display_name FROM public.POST, public.USER WHERE public.POST.user_id = public.USER.id ORDER BY public.POST.id DESC;');
        
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        echo '<h1>' . $row['title'] . '</h2>';
        echo '<h3>' . $row['subtitle'] . '</h3>';
        echo '<p>' . $row['content'] . '</p>';
        echo '<h5> Posted by ' . $row['display_name'] . ' on ' . $row['post_date'] . '</h5>';
        
      ?>
    </div>
  </div>
</body>

</html>