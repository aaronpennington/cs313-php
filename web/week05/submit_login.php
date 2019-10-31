<?php
session_start();

include "../includes/db.php";
include "../includes/links.php";

$username = $_POST['username'];
$password = $_POST['password'];

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
      
      // Getting submitted user data from database
      $query = "SELECT * FROM public.USER WHERE public.USER.username='$username';";
      
      foreach ($db->query($query) as $row)
      {
        $user_name = $row['username'];
        $user_id = $row['id'];
        $user_display = $row['display_name'];
        $h_password = $row['password'];
      }

      // Verify user password and set $_SESSION
      if (password_verify($password, $h_password)) {
        $_SESSION["user_id"] = $user_id;
        $_SESSION["display_name"] = $user_display;
      }
      else {
        echo "Error logging in. Password is incorrect.";
        header("Location: login.php?login_success=0");
        exit();
      }
    }

    header("Location: index.php");
    exit();
}
?>