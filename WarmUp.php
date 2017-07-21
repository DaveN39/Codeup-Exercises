<?php
$testArray = [2, 1, -5, "Bob"];
// create a variable to store the value of 0
$result = 0;

// foreach through each element in the array
foreach($testArray as $element) { 
	// Inside loop, if the element is_numeric...
	if(is_numeric($element)) {
		// have another if block to check to convert negative numbers to positive
		if ($element < 0) {
			$element *= -1;
		}
		// have another if/else that if the result is odd add it to the result
		if ($element % 2 == 0) {
			$result *= $element;
		} else { // else, add the number to the result
			$result += $element;
		}
	}
     	
} // end of loop
// echo the result
echo $result;