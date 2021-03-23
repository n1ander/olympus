<html>
	<?php include 'includes/header.php'; ?>
	<body>
		<h1>Fitness Logger</h1>
		<br>
		 <form action="log.php" method="POST">
		 	<label for="push_ups">Pushups:</label>
		 	<input type="text" id="push_ups" name="push_ups">
		 	<label for="pull_ups">Pullups:</label>
		 	<input type="text" id="pull_ups" name="pull_ups">
		 	<label for="mile">Mile:</label>
		 	<input type="text" id="mile" name="mile">
		 	<input type="submit" value="Submit">
		 </form>
		 <br>
		 <?php include 'includes/fitness_log.php'; ?>
	</body>
</html>
