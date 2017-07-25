<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isInArray($needle, $haystack) {
// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.
$result = array_search($needle, $haystack);

	if($result === false) {
		return false;
	} else {
		return true;
	}
}

if(isInArray("Tina", $names)) {
	echo "Tina is in the array" . PHP_EOL;
} else {
	echo "Tina is NOT in the array" . PHP_EOL;
}
if(isInArray("Bob", $names)) {
	echo "Bob is in the array" . PHP_EOL;
} else {
	echo "Bob is NOT in the array" . PHP_EOL;
}

	$count = 0;
	foreach ($compare as $compareName) {
		if (is_numeric(array_search($compareName, $names))) {
			$count++;
		}
	}
	return $count;

echo "There are " . arrayCompare($names, $compare) . " names in common" . PHP_EOL;

