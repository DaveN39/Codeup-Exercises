<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $title => $data) {
	if ($data['published'] > 1950) {
		echo "\n{$title}:\n";
		foreach ($data as $key => $info) {
			echo "\t{$key}: {$info}\n";
		}
		echo PHP_EOL;
	}
}

// BONUSES:
// 1) Update loop to only include books with less than 300 pages
// 2) Create a new loop that outputs the average page length and year of publication of the books in the books array 
// 3) Add the following entry to the $books array:
//     'Lord of the Rings' => array(
//         'published' => 1968,
//         'author' => 'J. R. R. Tolkien',
//         'pages' => 1178
//     )
// Construct another loop that iterates through each book as in the exercise step 2 
// but the loop should only list the first book of a given author in the books array.