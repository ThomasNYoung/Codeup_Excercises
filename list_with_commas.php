<?php
 // List of famous peeps
 function humanizedList($array, $sort = false) {
 	if($sort){
 		sort($array);
 	}
 	$lastItem = array_pop($array);
 	$newString = implode(', ', $array);
 	return $newString . ", and " . $lastItem;
 	
   // Your solution goes here!

 }
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(', ', $physicistsString);

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Converts array into list n1, n2, ..., and n3
 
 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

 ?>