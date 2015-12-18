<?php
function countUp( $start) {
    // $count = trim(fgets(STDIN));
	// if(!empty($count)) {
		// $i = $__fp;
	 //    for($i; $i <= ($i + 10); $i++){
	 //        if($i == ($i + 10)) {
	 //            echo $i;
	 //        } else {
	 //            echo $i . " then ";  
	 //        } 
	 //    }
	// } else {
	// 	echo "invalid";
	// }
// var_dump($count);
var_dump($__fp);
}
$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_start);

countUp($_start);

?>
