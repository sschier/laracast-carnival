<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Document4</title>
</head>

<body>

	<?php require('partials/nav.php'); ?>

	<nav>
		
		<ul>
			<li><a href="about">About Page</a></li>
			<li><a href="about/culture">About Our Culture</a></li>
			<li><a href="contact">Contact Page</a></li>
			

			<!-- <li><a href="/about.view.php">About Page</a></li> -->
			<!-- <li><a href="/contact.view.php">Contact Page</a></li> -->
		</ul>

	</nav>
	
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