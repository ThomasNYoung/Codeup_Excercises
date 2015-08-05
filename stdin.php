<?php
fwrite(STDOUT, 'whats your name?');

$firstName = fgets(STDIN);

fwrite(STDOUT, 'whats your last name?')

$lastName = fgets(STDIN,);

fwrite(STDOUT, "Hello, $firstName $lastName\n");
?>