<?php

include "./vendor/autoload.php";

use controllr\Cat as ControllrCat;
use model\Cat;
use model\line;
use model\Student;
use controllr\snake;

spl_autoload_register(function ($class) {

    $path =  __DIR__ . "/$class.php";
    $path = str_replace("\\", "/", $path);
    include $path;
});




$x = new Student("Ahmed", 22);
$v = new ControllrCat;
// $v->chat();

$c = new snake;
$c->name();
$c->name1();
// $x::getT();

// function FunctionName(Animal $animal)
// {

// }

// $c = new line;
// $c->walk();
// $c->chat();
