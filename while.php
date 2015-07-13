<?php

	// $test = 5;

	// while ($test <= 15) {
	// 	echo "$test\n";
	// 	$test++;
	// }

	$test = 5;

	while ($test <= 15) {
		if ($test % 4 == 0 && $test % 2 == 0) {
		echo "$test is divisble by 4 and 2.\n";
		} elseif ($test % 2 == 0){
			echo "$test is divisible by 2.\n";
		} else {
			echo "$test\n";
		}

		$test++;
	}
?>