<?php

function numeric_check($a, $b, $dividing = false){
	if (is_numeric($a) && is_numeric($b)){
		if($b === 0 && $dividing){
			echo "You cannot divide by zero\n";
			return false;
		}
		return true;
	} else {
		echo "Error! Both {$a} and {$b} was not a number\n";
		return false;
	}
}

function add($a, $b) {
	if (numeric_check($a, $b)) {
    	return $a + $b . PHP_EOL;
	}
}	
function subtract($a, $b) {
	if (numeric_check($a, $b)) {
	    return $a - $b . PHP_EOL;
	}
}  // Add code here
function multiply($a, $b) {
	if (numeric_check($a, $b)) {
	    return $a * $b . PHP_EOL;
	}
}
    // Add code here
function divide($a, $b) {
	if (numeric_check($a, $b, true)) {
	    return $a / $b . PHP_EOL;
	}
}  // Add code here
function remainder($a, $b) {
		numeric_check($a, $b);
		return $a % $b . PHP_EOL;
}

echo add(19, 39);
echo subtract(11, 29);
echo multiply(100, 300);
echo divide(21, 0);

// Add code to test your functions here
