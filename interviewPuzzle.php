<?php	
function solvePuzzle($num){
	$num = trim(fgets(STDIN));
	var_dump($num);
	
	$noHoles = array(
		"1" => 0,
		"2" => 0,
		"3" => 0,
		"5" => 0,
		"7" => 0

		);

	$oneHole = array(
		"0" => 1,
		"4" => 1,
		"6" => 1,
		"9" => 1
		);

	$twoHoles = array(
		"8" => 2
	);

	$numbers = explode("", $num);
	 var_dump($numbers);
	 die();
	if (array_search($num, $noHoles)) {
		echo 'yes' . PHP_EOL;
	}

}

solvePuzzle($num);