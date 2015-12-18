<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
// echo array_search('jimmy', $names);

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Tina';

$query2 = 'Bob';

function combineArrays($names, $compare){
	$namesArray = [];
	foreach ($names as $name) {
		$compareNames = array_shift($compare);
		array_push($namesArray, $name);
		if($name !== $compareNames){
			array_push($namesArray, $compareNames);
		}
	}
	return $namesArray;
}
print_r(combineArrays($names,$compare));

function isInArray($query, $names){
	$result = array_search($query, $names);
	if($result!==false){
		return true;
	} else {
		return false;
	}
}

echo $query . " is in the array" . PHP_EOL;
echo $query2 . " is not in the array" . PHP_EOL;

isInArray($query, $names);
isInArray($query2, $names);
	

function compare($names, $compare){
	$commonName = 0;
	foreach ($names as $name) {
	
	$result = array_search($name, $compare);
		if($result !==false){
			$commonName += 1;
		}
	}
	return $commonName;
}
echo "There are " . compare($names, $compare) . " names in common" . PHP_EOL;


	

?>