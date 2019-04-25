<!DOCTYPE html>

<html lang="en">

<head>
	
	<meta charset="utf-8">
	<title>Document</title>

</head>

<body>
	
	<header>
		<h1> Playing with Arrays</h1>
	</header>

		<ul> 
			<?php foreach($person as $feature_type => $feature) : ?>

			 	<li><strong><?= ucwords($feature_type); ?></strong> <?= $feature; ?></li>
				 	
			<?php endforeach; ?> 
		</ul>


		<ul> 
			<?php  

				 foreach($task as $feature_type => $feature) : ?>

				 	<li><strong><?= ucwords($feature_type); ?></strong> <?= ucwords($feature); ?></li>
				 	
			<?php endforeach; ?> 
		</ul>

		<ul>
			
			<li>
				<strong>Task Name: </strong><?= $task['title']; ?>
			</li>
			<li>
				<strong>Due Date: </strong><?= $task['due']; ?>
			</li>
			<li>
				<strong>Assignee: </strong><?= $task['assigned_to']; ?>
			</li>
			<li>
				<strong>Status: </strong>
				<?php if($task['completed']) : ?>
					&#10004;
				<?php else : ?>
					&#10008;
				<?php endif; ?>
			</li>
		</ul>


</body>

</html>
