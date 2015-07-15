<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         echo "margarita monday" . PHP_EOL;
         break;
     case 2:
     	echo "tequila tuesday" . PHP_EOL;
     	break;
     case 3:
     	echo "wasted wednesday" . PHP_EOL;
     	break;
     case 4:
     	echo "thirsty thursday" . PHP_EOL;
     	break;
     case 5: 
     	echo "frosty friday" . PHP_EOL;
     	break;
     case 6: 
     	echo "sippin saturday" . PHP_EOL;
     	break;
     case 7: 
     	echo "sunday funday" . PHP_EOL;
     	break;
 }

if(date('N') == 1){
	echo "margarita monday" . PHP_EOL;
}elseif(date('N')==2){
	echo "tequila tuesday" . PHP_EOL;
}elseif(date('N')==3){
	echo "wasted wednesday" . PHP_EOL;
}elseif(date('N')==4){
	echo "thirsty thursday" . PHP_EOL;
}elseif(date('N')==5){
	echo "frosty friday" . PHP_EOL;
}elseif(date('N')==6){
	echo "sippin saturday" . PHP_EOL;
}elseif(date('N')==7){
	echo "sunday funday" . PHP_EOL;
}
 ?>