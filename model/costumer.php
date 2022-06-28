<?php

namespace model;

class Student1 extends Student
{

    public function __construct($name, $age)
    {

        parent::__construct($name, $age);


        $this->maxScore = 200;
    }
    public static string $teacher = "mo";
}

// $z = new Student1("Ahmed", 50);
// $z::$teacher = "mohammed";

// Student::getT();
