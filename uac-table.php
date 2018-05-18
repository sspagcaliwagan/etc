<!DOCTYPE html>
<html>
	<head>
		<title>List of UACS for the Departments of the Government of the Philippines
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>
		<div class="container">
			<h2 class="text-center">List of UACS for the Departments of the Government of the Philippines</h2>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>UACS</th>
						<th>Department</th>
						<th>Agency</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$file = file_get_contents('https://igovphil.github.io/java-exam-01/uacs-agency.json');

					$agencies = json_decode($file, true); //puts the retrieved file in an associative array
					
					//since the structure of the agencies array is an array within an array, the first key-value pair will be a number paired with an array
					foreach($agencies as $keys=>$values){ 

						$values_keys = array_keys($values);	//gets the keys of the values array
						echo "<tr>";			
				
						foreach($values_keys as $key){					
							echo "<td>".$agencies[$keys][$key].'</td>';					
						}
						echo "</tr>";	
					}

				?>
				</tbody>
			</table>
		</div>
	</body>
</html>
