<?php

// TODO: Create your inspect() function here
 // function inspect($a){
 //  	if(empty($a)){
 // 		return "this is empty" . PHP_EOL;
	//  }
// 	if(is_array($a)){
// 		return "this is an array" . PHP_EOL;
// 	}elseif(is_bool($a)){
// 		return "this is a boolean " . PHP_EOL;
// 	}elseif(is_integer($a)){
// 		return "this is an integer" . PHP_EOL;
// 	}elseif(is_string($a)){
// 		return "this is a string;
// 	} elseif(is_null($a)){
// 		return;
// 	}else{
// 		"ERROR";
// 	}


 // }

function inspect($a){
	if(is_array($a)){
		return "this is an " . gettype($a) . PHP_EOL; 
	} elseif(is_integer($a)){
		return "this is an " . gettype($a) . " and has a value of " . ($a) . PHP_EOL;
	}elseif(is_bool($a) && $a == false){
		return "this is a" . gettype($a) . " and it is false" . PHP_EOL;
	}elseif(is_bool($a) && $a == true){
		return "this is a bool and girl you know its true" . PHP_EOL;
	}elseif(is_string($a)){ 
		return "this is a " . gettype($a) . " and it says: " . ($a) .PHP_EOL;
	}elseif(is_float($a)){
		return "this is a " . gettype($a) . " with a value of " . ($a) . PHP_EOL;
	}else {
		return "this is null" . PHP_EOL;
	}
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo inspect($num1) . PHP_EOL;
	 // echo inspect($num1) . PHP_EOL;

echo inspect($num2) . PHP_EOL;
	// echo inspect($num2) . PHP_EOL;

echo inspect($num3) . PHP_EOL;
	// echo inspect($num3) . PHP_EOL;

echo inspect($num4) . PHP_EOL;
	// echo inspect($num4) . PHP_EOL;

echo inspect($null) . PHP_EOL;
	// echo inspect($null) . PHP_EOL;

echo inspect($bool1) . PHP_EOL;
	// echo inspect($bool1) . PHP_EOL;

echo inspect($bool2) . PHP_EOL;
	// echo inspect($bool2) . PHP_EOL;

echo inspect($string1) . PHP_EOL;
	// echo inspect($string1) . PHP_EOL;

echo inspect($string2) . PHP_EOL;
	// echo inspect($string2) . PHP_EOL;

echo inspect($array1) . PHP_EOL;
// 	echo inspect($array1) . PHP_EOL;

echo inspect($array2) . PHP_EOL;
// 	echo inspect($array2) . PHP_EOL;

?>