<?php

namespace model;

class Student
{

    protected string $name;
    protected int $age;
    protected array $subjects = [
        'Arabic' => 0,
        'English' => 0
    ];
    protected int $minScore;
    protected int $maxScore;
    public static string $teacher = "ah";

    const R = 11;

    public function __construct($name, $age)
    {
        $this->setname($name);
        $this->setage($age);
    }

    private function setname($name)
    {


        $name = strtolower($name);
        $name = str_replace("a", "*", $name);
        $name = ucwords($name);
        $name = substr($name, 0, self::R);
        $this->name = $name;
    }

    private function setage($age)
    {
        $age = abs($age);
        $this->age = $age;
    }
    public function getname()
    {
        echo $this->name;
        self::class;
    }
    public function getmax()
    {
        echo $this->maxScore;
    }
    public static function getT()
    {
        self::$teacher;
        echo static::$teacher;
    }
}
