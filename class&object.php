<?php
    

class Person
{
        public $name = "Mg Mg"; //properties
        public $age = 18;
        public function intro($type) //methods
        {
            return "$this->name is a $type";
        }
        public function age()
        {
            return "I am $this->age old";
        }
        public function changeName($name)
        {
            $this->name = $name;
            return $this->intro("teacher");
        }
        
}

$person = new Person();

echo $person->intro("student");
echo "<br>";
echo $person->age();
echo "<br>";
echo $person->changeName("John Doe");

 ?>