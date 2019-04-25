<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Document4</title>
</head>

<body>

	<?php require('partials/nav.php'); ?>

	
	
	<ul>
		<?php foreach ($tasks as $task) : ?>
		<li>

				<?php if($task->status_done): ?>
					<strike>
				<?php endif; ?> 

				<?= $task->description; ?> 

				 <?php if($task->status_done) : ?>
					</strike>
				<?php endif; ?>

					
			</li>
		<?php endforeach; ?>

	</ul>

</body>


</html>