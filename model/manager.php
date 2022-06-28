<?php

namespace model;


abstract class ab
{
    public $name;
    public $age;
}

class th extends ab
{
}

class na extends ab implements va
{
    public function avg($salary)
    {
        echo "hi";
    }
}

interface va
{

    public function avg($salary);
}
$x = new na;
