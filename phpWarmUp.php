<?php

$result = 0;
$testArray = [2, 1, -5, "Bob"];

for ($i = 0; $i < count($testArray); $i++) { 
    $result = $testArray[$i];
    echo 'The number is: ' . $result . '!' . PHP_EOL; 
	echo(abs(5) . "<br>");
}