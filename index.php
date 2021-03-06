<html>
	<head>
		<title>Olympus</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
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
		 <table class="table">
		 	<thead class="thead-dark">
		 		<tr>
		 			<th>Pushups</th>
		 			<th>Pullups</th>
		 			<th>Mile Run</th>
		 		</tr>
		 	</thead>
		 	<tbody>
				<tr>
					<?php
					$data = file_get_contents("data.json");
					$data = json_decode($data, true);
					echo '<pre>';
					print_r($data);
					echo '</pre>';
					?>
				</tr>
			</tbody>
		 </table>
	</body>
</html>
