<?php

fwrite(STDOUT, "please input first\n");
$firstNumber = trim(fgets(STDIN));
fwrite(STDOUT,"input second number\n");
$secondNumber = trim(fgets(STDIN));
fwrite(STDOUT, "number by which to increment\n");
$incrementalNumber = trim(fgets(STDIN));

for($i = $firstNumber;$i <= $secondNumber; $i += $incrementalNumber){
	echo "$i\n";
}

?>