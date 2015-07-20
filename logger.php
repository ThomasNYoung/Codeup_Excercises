<?php
function logMessage($logLevel, $message){
    // todo - complete this function
	$specificTime = date("M d Y H:i:s");
	$dayTime = date("M-d-Y");
	$filename = "log-$dayTime.log";
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . "{$specificTime} [{$logLevel}] {$message}");
	fclose($handle);

}

function logInfo($message){
	$logLevel = "INFO";
	logMessage($logLevel, $message);
}

function logError($message){
	$logLevel = "ERROR";
	logMessage($logLevel, $message);
}


logInfo("This is a NEW info message with information");
logError("This is an error message.");

