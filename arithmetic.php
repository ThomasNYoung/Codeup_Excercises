<?php

function add($a, $b){
	if(is_numeric($a) && is_numeric($b)){
    	return $a + $b . PHP_EOL;
	}else {
		error();
	}
}

function subtract($a, $b){
	if(is_numeric($a) && is_numeric($b)){
    	return $a-$b . PHP_EOL;
	}else {
		error();
	}
}
function multiply($a, $b){
	if(is_numeric($a) && is_numeric($b)){
    	return $a*$b . PHP_EOL;
	}else {
		error();
	}
}
function divide($a, $b){
	 if ($a==0 || $b==0) {
		zeroError();
		return false;
	}
	if(is_numeric($a) && is_numeric($b)){
    	return $a/$b . PHP_EOL;
	}else {
		error();
	}
}	
function modulus($a, $b){
	if ($a==0 || $b==0) {
		zeroError();
		return false;
	}	
	if(is_numeric($a) && is_numeric($b)){
		return $a%$b . PHP_EOL;
	}else {
		error();
	}
}
function error(){
	echo "ERROR: must be all numbers!" . PHP_EOL;
}
function zeroError(){
	echo "ERROR: cannot divide by ZERO!" . PHP_EOL;
}
echo add(6, 76) . PHP_EOL;
echo subtract(20,82) . PHP_EOL;
echo multiply(394876,963) . PHP_EOL;
echo divide(36,234543634) . PHP_EOL;
echo modulus(5,34320) . PHP_EOL;
?>