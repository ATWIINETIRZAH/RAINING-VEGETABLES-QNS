<?php
//year of the person whos age is to be calculated
//$yearOfBirth = 1990;
$yearOfBirth=readline("what year were you born in?");

// Calculate the age based on the current year
//using the date function

$currentYear = date('Y');
$age_now = $currentYear - $yearOfBirth;

// Output the age
echo "You are " . $age_now . " years old.";
?>
