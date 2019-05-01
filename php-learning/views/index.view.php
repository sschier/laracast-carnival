<?php require('partials/head.php'); ?>


	<h1>Home Page</h1>

	<h2>High Priority Tasks:</h2>
	<ul>
		<?php foreach ($highPriorityTasks as $task) : ?>
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
	<h2>Low Priority Tasks:</h2>
	<ul>
		<?php foreach ($lowPriorityTasks as $task) : ?>
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


<?php require('partials/footer.php'); ?>
