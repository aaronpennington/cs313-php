<?php
session_start();

include "../includes/db.php";
include "../includes/links.php";

echo $_POST['username'];
echo $_POST['password'];
$username = $_POST['username'];
echo $username;

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
      
      // Getting submitted user data from database
      $query = "SELECT * FROM public.USER WHERE public.USER.username='$username';";
      
      echo $query;
      
      foreach ($db->query($query) as $row)
      {
        $user = $row['username'];
        $password = $row['password'];
      }
      
    		
    	// Verify user password and set $_SESSION
    	if ($_POST['password'] === $password)) {
    		$_SESSION["user_id"] = $user;
    	}
    }

    header("Location: index.php");
    exit();
}
?>