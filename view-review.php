<?php

require_once 'login.php';
//require_once  'checksession.php';
$page_roles = array('admin','author');
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
	<pre>
	<a href="add-review.php">Add Review</a>
	<a href='logout.php'>Logout</a>	
_END;

$query="SELECT * FROM Review";
$result=$conn->query($query);
if(!$result) die ($conn->error);

$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_BOTH);
	
	echo <<<_END
	<pre>
		Review_ID $row[Review_ID];
		Food_ID $row[Food_ID];
		MemberID $row[MemberID];
		Review $row[Review];
		Rating $row[Rating];
		Date $row[Date];
	</pre>
	<form action="delete-review.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="Review_ID" value="$row[Review_ID]">
	<input type="submit" value="DELETE RECORD">
	</form>
_END;
}

$result->close();
$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}



?>