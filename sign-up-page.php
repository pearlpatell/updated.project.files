<html>
	<head></head>
	
	<body>

		<form method='post' action='sign-up-page.php'>
			First Name: <input type='text' name='firstname'><br>
			Last Name: <input type='text' name='lastname'><br>
			Username: <input type='text' name='username'><br>
			Password: <input type='password' name='password'><br>
			<input type='submit' value='Sign Up'>
		</form>
	</body>

</html>



<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['username'])){
	

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//password_hash code here
	$token = password_hash($password, PASSWORD_DEFAULT);
	//code to add user here
	$query = "insert into User (firstname, lastname, username, password) values ('$firstname', '$lastname', '$username', '$token')";
	$result = $conn->query($query);
	if(!$result) die($conn->error);
}

$conn->close();


?>


