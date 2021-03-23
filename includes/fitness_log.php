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