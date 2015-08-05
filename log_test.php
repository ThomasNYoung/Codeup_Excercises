 <?php
require_once 'Log.php';

$log = new Log('cli');
$log->logInfo('Here is new info');
$log->logError('THis is an error');
