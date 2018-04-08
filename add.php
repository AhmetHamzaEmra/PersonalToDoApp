<?php


require_once 'app/init.php';


if(isset($_POST['name'], $_POST['lid'])){
	$name = trim($_POST['name']);
	$lid = trim($_POST['lid']);

	if(!empty($name)){

		$addedQuery = $db->prepare("
			INSERT INTO items (name, user, done, created, listid)
			VALUES (:name, :user, 0, NOW(), :listid)
			");


		$addedQuery->execute([
			'name' => $name,
			'user' => $_SESSION['user_id'],
			'listid' => $lid
		]);
	}
}

header('Location: index.php');