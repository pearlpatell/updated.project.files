<?php


$page_roles = array('admin,user');
require_once 'login.php';


$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<form action="add-review.php" method="post"><pre>
	Food_ID<input type="text" name="Food_ID"></br></br>
	MemberID <input type="text" name="MemberID"></br></br>
	Review <input type="text" name="Review"></br></br>
	Rating <input type="int" name="Rating"></br></br>
	Date <input type="text" name="Date"></br></br>
	<input type="submit" name="Add Review">
	</br></br>
	</br></br>
	<a href="view-review.php" > View All Reviews</a>
		<a href='logout.php'>Logout</a>	
</pre></form>
_END;


if(isset($_POST['Restaurant_ID']) &&
	isset($_POST['MemberID']) &&
	isset($_POST['Review']) &&
	isset($_POST['Rating']) &&
	isset($_POST['Date'])) {
		$Food_ID=get_post($conn, 'Restaurant_ID');
		$MemberID=get_post($conn, 'MemberID');
		$Review=get_post($conn, 'Review');
		$Rating=get_post($conn, 'Rating');
		$Date=get_post($conn, 'Date');

		$query="INSERT INTO Review (Restaurant_ID, MemberID, Review, Rating, Date) VALUES ".
			"($Restaurant_ID, $MemberID, '$Review',$Rating,'$Date')";
		echo $query;
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
	
}
 

$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>