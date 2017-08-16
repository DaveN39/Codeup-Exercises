<?php

function parseContacts($filename)
{
	$handle = fopen($filename, 'r');
    // todo - read file and parse contacts
    $contacts = fread($handle, filesize($filename));
    // now convert into an array
    $array = explode("\n", $contacts);
    // add new line at the end of each string on array
    array_pop($array);

    $filename = 'contacts.txt';

    $newContacts = [];

    fclose($handle);
    // variable = $array and $name = $key in foreach loop
    foreach ($array as $name) {
    	$newArray = [];
    	// new var for the pipe breaking point of key
    	$persInfo = explode("|", $name);
    	$persName = $persInfo[0];
    	$persNumber = substr($persInfo[1], 0, 3) . "-" . substr($persInfo[1], 3, 3) . "-" . substr($persInfo[1], 6, 4);
    	$newArray = ["name" => $persName, "number" => $persNumber];
    	array_push($newContacts, $newArray);
    }

    return $newContacts;
}

var_dump(parseContacts('contacts.txt'));
