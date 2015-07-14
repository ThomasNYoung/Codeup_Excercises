<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach($things as $thing){
	if(is_string($thing)){
		echo "string\n";
	} elseif (is_array($thing)) {
		echo "array\n";
	}elseif(is_bool($thing)){
		echo "boolean\n";
	}elseif (is_integer($thing)) {
		echo "integer\n";
	}elseif (is_null($thing)) {
		echo "null\n";
	}elseif (is_float($thing)) {
		echo "floater\n";
	}
}

foreach($things as $thing){
	if(is_array($thing)){
		echo implode(',', $thing) . PHP_EOL;
	}else{
		echo "$thing\n";
	}
}
		
		


foreach ($things as $thing) {
	if(is_scalar($thing)){
		echo "$thing is a scalar\n";
	}
}


?>