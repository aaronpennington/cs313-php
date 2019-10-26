<?php
// Always start this first
session_start();

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
include "../includes/links.php";

echo $_POST['username'];
echo $_POST['password'];
$username = $_POST['username'];
if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
      // Getting submitted user data from database
      $query = 'SELECT * FROM public.USER WHERE public.USER.username=\':username\';';
      echo $query;
      $statement = $db->prepare($query);
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