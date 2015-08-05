<?php

$textInput = 'contacts.txt';
function parseContacts($textInput)
{


    // todo - read file and parse contacts
    $handle = fopen($textInput, 'r');
    $contents = trim(fread($handle, filesize($textInput)));
    $contactsArray = explode(PHP_EOL, $contents);
    $contacts = array();
    
    foreach ($contactsArray as $key => $contact) {
    	$secondLevelArray['name'] = explode('|', $contact)[0];
    	$secondLevelArray['number'] = explode('|', $contact)[1];
    	$secondLevelArray['number'] = formatNumbers($secondLevelArray['number']);
    	array_push($contacts, $secondLevelArray);
    }
    
    fclose($handle);
    return $contacts;
}
    	
function formatNumbers ($number) {
	$number = '(' . substr($number, 0, 3) . ')' . substr($number, 3, 3) . '-' . substr($number, 6, 4);
	return $number;
}





print_r(parseContacts('contacts.txt'));
