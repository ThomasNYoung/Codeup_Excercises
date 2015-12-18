<?php

$textInput = 'phpchallenge.txt';
function parseEmployees($textInput)
{


    // todo - read file and parse employees
    $handle = fopen($textInput, 'r');
    $contents = trim(fread($handle, filesize($textInput)));
    $employeesArray = explode(PHP_EOL, $contents);
    $employees = array();
    
    foreach ($employeesArray as $key => $employee) {
        foreach ($key as $value => $sum) {
            $secondLevelArray['total_sold'] = array_sum($sum)[3];
        }
        // $secondLevelArray['total_sold'] = array_sum($employee[3]);
    	$secondLevelArray['employeeNumber'] = explode(',', $employee)[0];
    	$secondLevelArray['first_name'] = explode(',', $employee)[1];
        $secondLevelArray['last_name'] = explode(',', $employee)[2];
        $secondLevelArray['units_sold'] = explode(',', $employee)[3];
    	// $secondLevelArray['number'] = formatNumbers($secondLevelArray['number']);
    	array_push($employees, $secondLevelArray);
    }

    // foreach ($employeesArray as $key => $employee) {
    //     $secondLevelArray['total_sold'] = array_sum($contents[3]);
        
    //     array_push($employees, $secondLevelArray);
    // }
    
    fclose($handle);
    return $employees;
}
    	
function formatUnitsSold ($total_sold) {
	$total_sold = 'there were' . substr($total_sold) . 'total units sold' ;
	return $total_sold;
}





print_r(parseEmployees('phpchallenge.txt'));