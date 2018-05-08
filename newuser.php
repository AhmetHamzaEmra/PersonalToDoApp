<?php


require_once 'app/init.php';


if(isset($_POST['username'], $_POST['password'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	$addedQuery = $db->prepare("
		INSERT INTO people (name, password)
		VALUES (:name, :password)
		");


	$addedQuery->execute([
		'name' => $username,
		'password' => $password
	]);
}


header('Location: index.php');