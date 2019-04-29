<?php require('partials/head.php'); ?>


	<?php foreach ($users as $user) : ?>

		<li>
			<?= $user->name; ?>
		</li>

	<?php endforeach; ?>

	<h1> Submit Your Name</h1>

	<form method="POST" action="/names">
		<input name="name"></input>
		<button type=submit>Submit</button>

	</form>

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
