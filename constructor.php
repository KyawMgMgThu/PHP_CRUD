<?php
//constuctor / destructor

 class Person
 {
    public $name;
    public $age;

    function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
 }

 $person = new Person("John Doe",18);

 echo $person->name;
 echo "<br>";
 echo $person->age;

?>