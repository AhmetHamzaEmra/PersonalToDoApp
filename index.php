<?php

require_once 'app/init.php';

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
			background-image: url(img/login.jpg);
			background-size: 1920px 1080px;
    		background-repeat: no-repeat;
		}
	</style>

</head>
<body style="text-align: center; margin: 10px; padding: 10px">

		<form style="text-align: center; margin: 10px; padding: 10px" action="login.php" method="post">
		  User Name:<br>
		  <input type="text" name="username">
		  <br>
		  Password:<br>
		  <input type="password" name="password">
		  <br><br>
		  <input style="background-color: #4CAF50;   color: white; padding: 5px 7px; margin: 8px 0;  border: none; cursor: pointer;width: 5%;" type="submit">
		</form> 
		<a style="background-color: white;  padding: 5px 7px ; color: #008CBA; border: 2px solid #008CBA;" href="register.php">Register</a>

</body>
</html>
