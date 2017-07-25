<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function check($names, $name)
{
    //the ===false is if the name that is being searched is equivalent in both type and value...in this case 'Tina' is at index of zero, being so, 'Tina' is not false so we have to put === so it is not mistaken as false which would happen if it was == ...it is a static check
    if(array_search($name, $names)===false){
    return false ; //dont return a string
    }else {
        return true ;//dont return a string
    }
}
//this compare function is using $count to return number of values in common between the 2 arrays but is not necessarily "comparing"
function compare($names, $compare)
{
    $count=0;
    //this foreach is going through each array and going through $name of both arrays and will keep count of how many are similar and will add 1 to the value of count and at end of foreach will return the number of how many are in common 
    foreach ($names as $name) {
        //var_dump($name);
        if(check($compare, $name)){
            $count++;
            //var_dump($count);
        }
    }
    //returning the number of how many are common for both arrays
    return $count;
}
function combine_arrays($names, $compare)
{
    $newArray=[];
    foreach($names as $key => $name){
        //var_dump($name);
        //var_dump($key); // 0
        //echo $name; // tina
        //var_dump($compare[$key]);
        if($name == $compare[$key]){
            array_push($newArray, $name) . PHP_EOL;
        }else {
            array_push($newArray, $name, $compare[$key]) . PHP_EOL;
        }
    }  
    return $newArray;    
}
// function combine_arrays($arrays1, $arrays2){
//     foreach($arrays1 as $value){
//         if(check!=$arrays2)
//     }
// }

var_dump (combine_arrays($names, $compare));
 