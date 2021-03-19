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
		 <table class="table">
		 	<thead class="thead-dark">
		 		<tr>
		 			<th>ID</th>
		 			<th>Pushups</th>
		 			<th>Pullups</th>
		 			<th>Mile Run</th>
		 		</tr>
		 	</thead>
		 	<tbody>
				<?php
				$data = file_get_contents("data.json");
				$data = json_decode($data, true);
				foreach($data as $entries){
					foreach($entries as $entry){
						echo "<tr><td>" . $entry["id"] . "</td>" . "<td>" . $entry["pullups"] . "</td>" .  "<td>" . $entry["pushups"] . "</td>" .  "<td>" . $entry["mile"] . "</td></tr>";
					}
				}
				?>
			</tbody>
		 </table>
	</body>
</html>
