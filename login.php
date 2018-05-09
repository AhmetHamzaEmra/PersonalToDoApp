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

	<style type="text/css">
		body{
			background: url("img/x.jpg");
    		background-repeat: no-repeat;
    		background-attachment: fixed;
    		background-position: center; 
		}
	</style>

</head>
<body>
	<h2 style="text-align: center;">The username or password is wrong!<br>Please try again!<br></h2>
	<br/>
	<a style="font-size: 12px; border-radius: 8px; padding: 12px 24px; font-weight: bold;padding: 10;border:  2px solid #008CBA; background-color: white;" href="index.php">Try Again</a>

</body>
</html>
