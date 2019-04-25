<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Document2</title>
</head>

<body>
	
	<ul>
		
		<?php foreach ($tasks as $task) : ?>
			<?php $task->complete(); ?>
			<li>

				<?php if($task->isDone()) : ?>
					<strike>
				<?php endif; ?>

				<?= $task->description; ?> 

				 <?php if($task->isDone()) : ?>
					</strike>
				<?php endif; ?>


				<?= "  :  " . $task->status_report() ?>
					
			</li>
		<?php endforeach; ?>
	</ul>

</body>


</html>