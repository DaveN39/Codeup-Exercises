<?php

# Make your own PHP library of helpful functions!
define('LIBRARY_FILE', __DIR__ . '/library.php');

## Make a file called library.php
require LIBRARY_FILE;

class PHPAssessmentTests extends PHPUnit_Framework_TestCase
{
// Write a function called isEven that takes in a variable and returns true or false if the provided input is evenly divisible by two or not.
    public function test_is_even()
    {
        $this->assertTrue(
            function_exists('isEven'),
            "Expected isEven() function to be present."
        );

        $this->assertTrue(
            is_bool(isEven(3)),
            "Expected isEven() function to return a boolean."
        );

        $this->assertTrue(
            is_bool(isEven(4)),
            "Expected isEven() function to return a boolean."
        );

        $this->assertTrue(
            isEven(10),
            "Expected isEven(10) to return true."
        );

        $this->assertFalse(
            isEven(5),
            "Expected isEven(5) to return false."
        );

        $this->assertFalse(
            isEven("Bob"),
            "Expected isEven('Bob') to return false."
        );

    }

// Write a function called isVowel that returns true or false if the provided input is the letter 'a', 'e', 'i', 'o', or 'u'
    public function test_is_vowel()
    {
        $this->assertTrue(
            function_exists('isVowel'),
            "Expected isVowel() function to be present"
        );

        $this->assertTrue(
            is_bool(isVowel('a')),
            "Expected isVowel() function to return a boolean."
        );

        $this->assertTrue(
            isVowel('a'),
            "Expected isVowel('a') to return true."
        );
        
        $this->assertTrue(
            isVowel('e'),
            "Expected isVowel('e') to return true."
        );

        $this->assertTrue(
            isVowel('i'),
            "Expected isVowel('i') to return true."
        );

        $this->assertTrue(
            isVowel('o'),
            "Expected isVowel('o') to return true."
        );

        $this->assertTrue(
            isVowel('u'),
            "Expected isVowel('u') to return true."
        );

        $this->assertFalse(
            isVowel('B'),
            "Expected isVowel('B') to return false."
        );

        $this->assertFalse(
            isVowel(5),
            "Expected isVowel(5) to return false."
        );
    }

// Write a function called "first" that takes in an argument that could be an array or a string. Return the first character if the argument is a string. Return the first element of the array if the input is an array.
    public function test_first()
    {
        $this->assertTrue(
            function_exists('first'),
            "Expected first() function to be defined."
        );
        
        $this->assertEquals(
            "B", first('Bob'),
            "Expected first('Bob') to return 'B'."
        );
        
        $this->assertEquals(
            1, first([1, 2, 3]),
            "Expected first([1, 2, 3]) to return 1."
        );

        $this->assertEquals(
            'P', first('Programming'),
            "Expected first(Programming) to return 'P'."
        );

    }

// Write a function called "second" that takes in input that could be an array or a string. The function should return the second character or element of the input.
    public function test_second()
    {
        $this->assertTrue(
            function_exists('second'),
            "Expected second() function to be defined."
        );
        
        $this->assertEquals(
            "o", second('Bob'),
            "Expected second('Bob') to return 'o'."
        );
        
        $this->assertEquals(
            2, second([1, 2, 3]),
            "Expected second([1, 2, 3]) to return 2."
        );

        $this->assertEquals(
            "r", second('Programming'),
            "Expected last('Programming') to return 'r'."
        );
    }

// Write a function called "last" that takes in an input that could be an array or a string. Your function should return the last character or element of the input.
    public function last()
    {
        $this->assertTrue(
            function_exists('last'),
            "Expected last() function to be defined."
        );
        
        $this->assertEquals(
            "b", last('Bob'),
            "Expected last('Bob') to return 'b'."
        );

        $this->assertEquals(
            "g", last('Programming'),
            "Expected last('Programming') to return 'g'."
        );
        
        $this->assertEquals(
            3, last([1, 2, 3]),
            "Expected last([1, 2, 3]) to return 3."
        );
    }

// Write a function called "reverse" that takes in an input of either a string or an array. Your function should return the elements or characters in reverse order.
    public function test_reverse()
    {
        $this->assertTrue(
            function_exists('reverse'),
            "Expected reverse() function to be defined."
        );
        
        $this->assertEquals(
            "boB", reverse('Bob'),
            "Expected reverse('Bob') to return 'boB'."
        );

        $this->assertEquals(
            "gnimmargorP", reverse('Programming'),
            "Expected reverse('Programming') to return 'gnimmargorP'."
        );
        
        $this->assertEquals(
            [3, 2, 1], reverse([1, 2, 3]),
            "Expected reverse([1, 2, 3]) to return [3, 2, 1]."
        );
    }

// Write a function called "random" that takes in an input that can be either a string or an array. Your function should return a random element or character from the input.
    public function test_random()
    {
        // The primary challenge to testing a random() function is that it lacks referential transparency.
        // See http://blog.agiledeveloper.com/2016/01/benefits-of-pure-functions-offer.html

        $this->assertTrue(
            function_exists('random'),
            "Expected random() function to be defined."
        );

        // expect a string when passed a string
        $this->assertTrue(
            is_string(random("Banana")),
            "Expected random() to return a random character represented as a string data type when provided a string."
        );

        // expect a number when passed an array of numbers
        $this->assertTrue(
            is_int(random([1, 2, 3])),
            "Expected random([1, 2, 3]) to return an integer since a random element of the array [1, 2, 3] is an integer."
        );

        $this->assertEquals(
            'a', random('aaaaaaaaaaaaaaaaaa'),
            "Expected random('aaaaaaaaaaaaaaaaaa') to return 'a'."
        );

        $this->assertEquals(
            4, random([4, 4, 4, 4, 4]),
            "Expected random([4, 4, 4, 4, 4]) to return 4."
        );

        $this->assertTrue(
            in_array(random([1, 2, 3, 4, 5]), [1, 2, 3, 4, 5]),
            "Expected random([1, 2, 3, 4, 5]) to return 1 or 2 or 3 or 4 or 5."
        );
    }

}
?>