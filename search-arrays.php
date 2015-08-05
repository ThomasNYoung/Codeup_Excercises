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
		echo $query . " is in the array" . PHP_EOL;
		return true;
	}else {
		echo $query . " is not in the array" . PHP_EOL;
		return false;
	}
	
}

isInArray($query, $names);
isInArray($query2, $names);
	

function compare($names, $compare){
	$result = array_intersect($names, $compare);
	echo $result;
	if($result)
}
compare($names, $compare);

?>