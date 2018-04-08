<?php


require_once 'app/init.php';


if(isset($_POST['listname'])){
	$listname = trim($_POST['listname']);

	if(!empty($listname)){

		$addedQuery = $db->prepare("
			INSERT INTO lists (name, user)
			VALUES (:name, :user)
			");


		$addedQuery->execute([
			'name' => $listname,
			'user' => $_SESSION['user_id']
		]);
	}
}

header('Location: index.php');