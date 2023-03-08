<?php

require_once  'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['delete']))
{
	$ID = $_POST['ID'];

	$query = "DELETE FROM Review WHERE ID='$ID' ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: view-review.php");
	
}


?>