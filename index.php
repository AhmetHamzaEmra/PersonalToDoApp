<?php

require_once 'app/init.php';

// lists 
$listsQuery = $db->prepare("
	SELECT id, name
	FROM lists
	WHERE user = :user
");
$listsQuery->execute([
	'user' => $_SESSION['user_id']
]);
$lists = $listsQuery->rowCount() ? $listsQuery : [];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>To Do</title>


	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">

	<meta name="viewport" content="width=device-width,  initial-scale = 1.0">

</head>
<body>

	<?php foreach($lists as $list): ?>



		<?php 
		// items 
		$itemsQuery = $db->prepare("
			SELECT id, name, done
			FROM items
			WHERE user = :user AND listid = :listid
		");
		$itemsQuery->execute([
			'user' => $_SESSION['user_id'],
			'listid' => $list['id']
		]);
		$items = $itemsQuery->rowCount() ? $itemsQuery : [];
		?>

		<div class='list'> 
			<h1 class="header"><?php echo $list['name']; ?></h1>

			<?php if(!empty($items)): ?>
			<ul class="items">
				<?php foreach($items as $item): ?>
						<li>
							<span class="item<?php echo $item['done'] ? " done" : '' ?>"><?php echo $item['name']; ?></span>
							<?php if(!$item['done']): ?>
								<a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button">Mark as done</a>
							<?php endif; ?>
						</li>
				<?php endforeach; ?>
			</ul>
			<?php else: ?>
				<p>You haven't added any items yet!</p>
			<?php endif; ?>

			<form action="add.php" method="post" class="item-add">
				<input type="text" name="name" placeholder="Type a new item in here." class="input" autocomplete="off" required>
				<input type="text" name="lid" placeholder="" autocomplete="off" required="" style="visibility: hidden;" value="<?php echo $list['id'] ?>">
				<input type="submit" name="add" class="submit">
				
			</form>
		</div>
		
	<?php endforeach; ?>

	<form action="addlist.php" method="post" class="item-add">
		<input type="text" name="listname" placeholder="Type a new list name here" class="input" autocomplete="off" required>
		<input type="submit" name="add" class="submit">
	</form>

</body>
</html>