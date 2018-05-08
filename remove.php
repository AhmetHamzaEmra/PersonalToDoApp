<?php


require_once 'app/init.php';


if (isset($_POST['id'])){

	$id = $_POST['id'];



	$doneQuery = $db -> prepare("
		UPDATE list
		SET active = 0
		WHERE id = :id
		AND user = :user
		");


	$doneQuery -> execute([
		'id' => $id,
		'user' => $_SESSION['user_id']]);


}


header('Location: todo.php');