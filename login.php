<?php


require_once 'app/init.php';

$username = $_POST['username'];
$password = $_POST['password'];



// lists 
$row = $db->query(" SELECT *
	FROM people");

foreach ($row as $key) {
	if ($key['name'] == $username && $key['password'] == $password){
		$_SESSION['user_id'] = $key['id'];
		echo $_SESSION['user_id'];
		header('Location: todo.php');
		break;
		die();

		
}
}



?>


<!DOCTYPE html>
<html>
<head>	
	<meta charset='UTF-8'>
	<title>To Do</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">

	<meta name="viewport" content="width=device-width,  initial-scale = 1.0">

</head>
<body>
	<h2>The username or password is wrong!<br>Please try again!<br></h2>
	<a href="index.php">Go Back</a>

</body>
</html>
