<?php

require_once "person.php";

class student extends person
{
public string $sudentID;
public function __construct($name, $surname,$studentID)
{
    parent::__construct($name, $surname);
    $this -> age = 18;
    $this -> studentID = $studentID;
}
}