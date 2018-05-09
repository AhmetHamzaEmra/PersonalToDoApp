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
			background: url("img/signup.jpg");
		}
	</style>

</head>
<body>
	<form style="text-align: center; margin: 10px; padding: 10px" action="newuser.php" method="post">
		  User Name:<br>
		  <input type="text" name="username">
		  <br>
		  Password:<br>
		  <input type="password" name="password">
		  <br><br>
		  <input style="background-color: #4CAF50;   color: white; padding: 5px 7px; margin: 8px 0;  border: none; cursor: pointer;width: 5%;" type="submit" >
		</form>
	<a style="float:left; font-size: 12px; border-radius: 8px; padding: 12px 24px; font-weight: bold;padding: 10;border:  2px solid #008CBA; background-color: white;" href="index.php">Back to Login Page!</a>
</body>
</html>