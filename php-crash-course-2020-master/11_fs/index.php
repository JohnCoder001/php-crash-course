<?php
// Magic constants
echo __DIR__.'<br>';



echo __FILE__.'<br>';

echo __LINE__.'<br>';


// Create directory
//mkdir('test');

// Rename directory
//rename('test', 'ngash');

// Delete directory
//rmdir('ngash');
//rmdir('test');

// Read files and folders inside directory
//$FILES = scandir('../');
//echo '<pre>';
//var_dump($FILES);
//echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.text', 'some content');


// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/');
echo $usersJson;
$users = json_decode($usersJson);
echo '<pre>';
var_dump($users);
echo '</pre>';
file_exists('sample.txt');

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file