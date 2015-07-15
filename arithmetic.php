<?php

function add($a, $b){
	if(is_numeric($a) && is_numeric($b)){
    	return $a + $b;
	}else {
		return "ERROR: both arguments must be numbers" . PHP_EOL;
	}
}

function subtract($a, $b){
	if(is_numeric($a) && is_numeric($b)){
    	return $a-$b;
	}else {
		return "ERROR: both arguments must be numbers" . PHP_EOL;
	}
}
function multiply($a, $b){
	if(is_numeric($a) && is_numeric($b)){
    	return $a*$b;
	}else {
		return "ERROR: both arguments must be numbers" . PHP_EOL;
	}
}
function divide($a, $b){
	 if ($a==0 || $b==0) {
		return "ERROR: you CANNOT divide by zero" . PHP_EOL;
	}
	if(is_numeric($a) && is_numeric($b)){
    	return $a/$b;
	}else {
		return "ERROR: both arguments must be numbers" . PHP_EOL;
	}
}	
function modulus($a, $b){
	if(is_numeric($a) && is_numeric($b)){
		return $a%$b;
	}else {
		return "ERROR: both arguments must be numbers" . PHP_EOL;
	}
}
echo add(6, 12) . PHP_EOL;
echo subtract(20,2) . PHP_EOL;
echo multiply(9,2) . PHP_EOL;
echo divide(36,0) . PHP_EOL;
echo modulus(5,2) . PHP_EOL;
?>