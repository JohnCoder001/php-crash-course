<?php

// What is a variable

// Variable types
// Declare variables
$name = 'zura';
$age = 28;
$ismale = true;
$height = 1.85;
$salary = null;


// Print the variables. Explain what is concatenation
echo $name. '<br>';
echo $age . '<br>';
echo $ismale = true.'<br>';
echo $height = 1.85. '<br>';
echo $salary = null. '<br>';

// Print types of the variable
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($ismale) .'<br>';
echo gettype($height) . '<br>';
echo gettype($salary ) . '<br>';

// Print the whole variable
var_dump($name, $age, $ismale, $height, $salary,);
// Change the value of the variable
$name= false;
// Print type of the variable
echo gettype($name) .'<br>';
// Variable checking functions
is_string($name); //false
is_int($age); //true
is_bool($ismale); //true
is_double($height); //true


// Check if variable is defined
isset($name); //true
isset($adress); //false
// Constants
define('PI', 3.14);
echo PI.'<br>';
// Using PHP built-in constants
echo SORT_ASC. '<br>';
echo PHP_INT_MAX. '<br>';

