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

</head>
<body>
	<form style="text-align: center; margin: 10px; padding: 10px" action="newuser.php" method="post">
		  User Name:<br>
		  <input type="text" name="username">
		  <br>
		  Password:<br>
		  <input type="password" name="password">
		  <br><br>
		  <input type="submit" >
		</form> 
</body>
</html>