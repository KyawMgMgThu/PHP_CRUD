<?php

abstract class person
{
    public $name;
    public $age;
    public $department;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function work($type)
    {
        return "$this->name is a $type";
    }
}

class Worker extends Person
{
    public function __construct($name, $age, $department)
    {
        $this->name = $name;
        $this->age = $age;
        $this->department = $department;
    }
}

$worker = new Worker("Kyaw Kyaw", 19, "Editor");

var_dump($worker);
