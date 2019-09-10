<?php
class Employee1
{

    private $position;

    function developSoftware()
    { }

    function testSoftware()
    { }

    function saleSoftware()
    { }
}

abstract class Employee
{
    abstract protected function working();
}

class Developer extends Employee
{
    public function working()
    {
        echo 'Developer';
    }
}

class Tester extends Employee
{
    public function working()
    {
        echo 'Tester';
    }
}

class Salesman extends Employee
{
    public function working()
    {
        echo 'Salesman';
    }
}
