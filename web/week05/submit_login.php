<?php
// Always start this first
session_start();

include "../includes/db.sql";
include "../includes/links.php";

echo $_POST['username'];
echo $_POST['password'];
$username = $_POST['username'];
if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
      // Getting submitted user data from database
      $query = 'SELECT * FROM public.USER WHERE public.USER.username=\':username\';';
      echo $query;
      $statement = $db->prepare('SELECT * FROM public.USER WHERE public.USER.username=\':username\';');
      $statement->bindValue(':username', $username, PDO::PARAM_STR);
      $statement->execute();
      echo "DONE";
      $results = $statement->fetchAll(PDO::FETCH_ASSOC);
      // $user = $results->fetchObject();
      
    		
//     	// Verify user password and set $_SESSION
//     	// if ( password_verify( $_POST['password'], $user->password ) ) {
//     	// 	$_SESSION['user_id'] = $user->ID;
    	// }
    }

    // header("Location: index.php");
    // exit();
}
?>