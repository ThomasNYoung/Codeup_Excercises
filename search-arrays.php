<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
// echo array_search('jimmy', $names);

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Tina';

$query2 = 'Bob';

function isInArray($query, $names){
	$result = array_search($query, $names);
	echo $result;
	if($result!==false){
		echo $names[$result] . " is in the array" . PHP_EOL;
		return true;
	}else {
		echo $query . " is not in the array" . PHP_EOL;
		return false;
	}
	
}

isInArray($query, $names);
isInArray($query2, $names);
	

function compareArray($names, $compare){

	$count = 0;
	foreach ($names as $name) {
		if
	}
	$result = array_intersect($names, $compare);
	// return $result;
	if($result){
		echo $result;
	}
}
compareArray($names, $compare);

?>