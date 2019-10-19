<?php
  $user_id = $_POST['user_id'];
  foreach ($db->query('SELECT public.user.username AS user_name, public.user.display_name AS display_name, public.post.title AS title, public.post.subtitle AS subtitle, public.post.content AS content, public.post.post_date AS post_date FROM public.USER, public.POST WHERE public.USER.ID = ' . $user_id . ' AND public.POST.USER_ID = ' . $user_id . '  ORDER BY public.post.post_date;') as $row)
  {
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<h4>' . $row['subtitle'] . '</h4>';
    echo '<h5> Posted by ' . $row['display_name'] . ' on ' . $row['post_date'] . '</h5>';
    echo '<hr><br/>';
  }
?>