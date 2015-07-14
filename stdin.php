<?php
fwrite(STDOUT, 'whats your name?');

$firstName = fgets(STDIN);

fwrite(STDOUT, 'whats your last name?')

$lastName = fgets(STDIN,0);

fwrite(STDOUT, "Hello, $firstName $lastName\n");
?>