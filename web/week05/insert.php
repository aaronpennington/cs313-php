<?php
// get the data from the POST
$title = $_POST['inputTitle'];
$subtitle = $_POST['inputSubtitle'];
$content = $_POST['inputContent'];

include "../includes/db.php";

try
{
   $query = 'INSERT INTO public.POST(title, subtitle, content, post_date, user_id) VALUES(:title, :subtitle, :content, :post_date, :user_id)';
   $statement = $db->prepare($query);
   $statement->bindValue(':title', $title);
   $statement->bindValue(':subtitle', $subtitle);
   $statement->bindValue(':content', $content);
   $statement->bindValue(':post_date', '\'now()\'');
   $statement->bindValue(':user_id', "1");
   $statement->execute();

	// Now we bind the values to the placeholders. This does some nice things
   // including sanitizing the input with regard to sql commands.
   
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// // finally, redirect them to a new page to actually show the topics
$post_id = $db->query('SELECT id FROM public.POST ORDER BY id DESC LIMIT 1;');
echo $post_id;
// $url = "post.php?id=".$post_id;
// header("Location: ".$url);

exit(); // we always include a die after redirects. In this case, there would be no
//        // harm if the user got the rest of the page, because there is nothing else
//        // but in general, there could be things after here that we don't want them
//        // to see.

?>