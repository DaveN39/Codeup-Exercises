<?php

// $lowerString = "abc"; 

// $upperString = ucwords($lowerString);
// echo "Old string - $lowerString <br />";
// echo "New string - $upperString";



function greeting ($firstName, $lastName) 
{
	$output = "";

	$output = "$firstName $lastName";

	if (is_string($firstName) && is_string($lastName)) {
		$output = "Hello, $firstName $lastName!";
	} else {
		$output = "Sorry, need two valid names..";
	}
	return $output;	
}

echo greeting("David", "Newton") . PHP_EOL;
echo greeting("David", 41) . PHP_EOL;