<?php

// What is class and instance
require_once "person.php";
require_once "student.php";

$student = new student("john", 'ngash','studentID');
echo '<pre>';
var_dump($student);
echo '</pre>';
//$p = new person("john", "ngash");
//$p ->setAge(30);
//$this -> studentID = $studentID;
//$this -> studentID = $studentID;
//$this -> studentID = $studentID;
//echo $p->getAge();
//$p2 =new person('john', 'smith');
//echo '<pre>';
//var_dump($p2);
//echo '</pre>';
//echo person::$counter++;
