<?php

// Create simple string
$name = 'zura';
$string = ' hello I am zura '. $name.'.I am 28';
$string = " hello ". $name .'. I am 28';
echo $string .'<br>';
echo $string .'<br>';
// String concatenation
echo 'hello '.' world '.'and php '.' <br>';

// String functions
$string =  "    hello world     ";

//echo "1 - " . strlen ($string) . '<br>';
//echo "1 - " . trim ($string) . '<br>';
//echo "1 - " .ltrim($string) . '<br>';
//echo "1 - " .rtrim($string) . '<br>';
//echo "1 - " . str_word_count ($string) . '<br>';
//echo "1 - " . strrev ($string) . '<br>';
//echo "1 - " . strtoupper ($string) . '<br>';
//echo "1 - " . strtolower ($string) . '<br>';
//echo "1 - " . ucfirst ($string) . '<br>';
//echo "1 - " . lcfirst ($string) . '<br>';
//echo "1 - " . ucwords ($string) . '<br>';
// Multiline text and line breaks
$longText = "hello, my name is zura I am 27  I love my daughter";
echo $longText. '<br>'
;
echo nl2br($longText) .'<br>';
// Multiline text and reserve html tags
$longtext = "hello, my name is  <b>zura</b> I am <b>27</b>I lovemy dayghter". '<br>';
echo " 1 - " .$longText.'<br>';
echo " 2 - " .nl2br($longText).'<br>';
echo " 3 - " .htmlentities($longText).'<br>';
// https://www.php.net/manual/en/ref.strings.php