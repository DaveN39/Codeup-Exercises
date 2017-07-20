<?php
// 1.) Write a loop that outputs the numbers 1 to 100
for ($i = 1; $i <= 100; $i++)
{
    // 2.) In the PHP repl, figure out how to check if a number is divisible by 3
        // Hint: what does the % operator do? 
    // 3.) Inside of your loop, check if each number is divisible by 3
    //         - If it is evenly divisible by 3, output "fizz"
    //         - If it is not evenly divisible by 3, just output the number
    // 4.) Do the same as above, but add checks for 5 as well
    // 5.) Handle the case where the number is divisible by both 3 and 5.

    if($i % 3 == 0 && $i % 5 ==0){
        echo "FizzBuzz<br />";
    }
    else if($i % 3 == 0){
        echo "Fizz<br />";
    }
    else if($i % 5 == 0){
        echo "Buzz<br />";
    }
    else {
        echo $i."<br />";
    }
}