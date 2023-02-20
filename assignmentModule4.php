<?php

//We will write all the codes for the following five tasks inside a single function called assignmentModule4

function assignmentModule4()
{
    /*1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)*/

    function sortStringsByLength($arr)
    {
        usort($arr, function ($a, $b) {
            return strlen($a) - strlen($b);
        });
        return $arr;
    }

    $strings = array("Apple", "Banana", "Papaya", "Litchy", "John", "Roy");
    $sortedString = sortStringsByLength($strings);
    print_r($sortedString);

    /*2. Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string. */

    function concatenatestring($string1, $string2)
    {
        return $string1 . $string2;
    }
    $string1 = 'Hello';
    $string2 = 'Bangladesh';

    $concatenatedString = concatenatestring($string1, $string2);

    echo $concatenatedString;
    echo "\n";

/*3. Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array. */

    $arr = array(1, 2, 3, 4, 5, 'Mango', 'Banana');
    function removeFirstLast($arr)
    {
        if (count($arr) <= 2) {
            return array();
        } else {
            array_shift($arr);
            array_pop($arr);
            return $arr;
        }
    }
    $newArray = removeFirstLast($arr);
    print_r($newArray);
    echo PHP_EOL;

//4.Write a PHP function to check if a string contains only letters and whitespace.

    $str = "This is a sample string!";
    function hasOnlyLettersAndWhitespace($str)
    {
        return preg_match('/^[a-zA-Z\s]+$/', $str);
    }
    $check = hasOnlyLettersAndWhitespace($str);

    if ($check == true) {
        echo "This string contains only letters and whitespace.";
    } else {
        echo "This string contains characters along with letters and whitespace.";

    }
    echo PHP_EOL;

//5.Write a PHP function to find the second largest number in an array of numbers.

    function findSecondLargest($array)
    {
        $max1 = $max2 = PHP_INT_MIN;

        foreach ($array as $num) {
            if ($num > $max1) {
                $max2 = $max1;
                $max1 = $num;
            } else if ($num > $max2 && $num != $max1) {
                $max2 = $num;
            }
        }

        return $max2 == PHP_INT_MIN ? null : $max2;
    }

    $array = [23, 56, 7, 9, 92, 143, 72];
    $SecondLargest = findSecondLargest($array);
    echo "The second largest number in the given array is {$SecondLargest}";
}

assignmentModule4();
