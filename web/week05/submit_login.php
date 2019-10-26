<?php
// Always start this first
session_start();

include "../includes/db.sql";
echo $_POST['username'];
echo $_POST['password'];
if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
      // Getting submitted user data from database
      $query = 'SELECT * FROM public.USER WHERE public.USER.username=\':username\';');
      echo $query;
      // $statement = $db->prepare($query);
      // $statement->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
      // $statement->execute();
      // $results = $statement->fetchAll(PDO::FETCH_ASSOC);
      // // $user = $results->fetchObject();
      // echo $results;
    		
//     	// Verify user password and set $_SESSION
//     	// if ( password_verify( $_POST['password'], $user->password ) ) {
//     	// 	$_SESSION['user_id'] = $user->ID;
    	// }
    }

    // header("Location: index.php");
    // exit();
}
?>