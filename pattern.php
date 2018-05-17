<?php

	//prints a diamond shaped pattern by merging a triangle and an inverted triangle

	$n = 3;
	$space = $n - 1;

	//the upper triangle
	for($row = 1; $row <= $n; $row++){
		
		//prints spaces where there are no asterisks
		for($i = 1; $i <= $space; $i++){
			echo "&nbsp";
		}
		$space--;

		//prints * depending on the value of the row variable
		for($i = 1; $i <= $row; $i++){
			echo "* ";
		}
		echo "<br>";
	}

	//the same algo as the upper triangle except inverted by decrementing the variables in the loop. It starts with n - 1 to complete the lower half of the diamond
	$space = 1;


	for($row = $n - 1; $row >= 1; $row--){
		for($i = 1; $i <= $space; $i++){
			echo "&nbsp";
		}
		$space++;

		for($i = $row; $i >= 1; $i--){
			echo "* ";
		}
		echo "<br>";
	}

?>