<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Document3</title>
</head>

<body>
	
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