<?php

class Student1
{
    private static $STANDARD_FEE = 1;
    private $st_name;
    private $st_age;
    private $st_type;

    public function payTuitionFee()
    {
        if ($this->st_type == 'foreign') {
            return self::$STANDARD_FEE * 1.3;
        } else if ($this->st_type == 'talented') {
            return self::$STANDARD_FEE * 0.8;
        } else {
            return self::$STANDARD_FEE;
        }
    }

    // Other functions
}

interface NationalSocialInterface
{
    function runForSecretary();
}

class Student2
{
    protected static $STANDARD_FEE = 1;
    protected $st_name;
    protected $st_age;

    public function __construct($name, $age)
    {
        $this->st_name = $name;
        $this->st_age = $age;
    }

    public function payTuitionFee()
    {
        return self::$STANDARD_FEE;
    }

    // Other function
}


class AdvancedStudent extends Student2 implements NationalSocialInterface
{
    public function payTuitionFee()
    {
        return self::$STANDARD_FEE * 0.8;
    }

    public function runForSecretary()
    {
        // Do something here.
    }
    // Other function
}

class ForeignStudent extends Student2
{
    public function payTuitionFee()
    {
        return self::$STANDARD_FEE * 1.3;
    }
    // Other function
}

class NormalStudent extends Student2 implements NationalSocialInterface
{
    public function payTuitionFee()
    {
        return self::$STANDARD_FEE;
    }

    public function runForSecretary()
    {
        // Do something here.
    }
}

$st1 = new AdvancedStudent('Sun1', 19);
$st2 = new ForeignStudent('Sun2', 20);
$st3 = new NormalStudent('Sun3', 21);
$students = array($st1, $st2, $st3);

foreach ($students as $value) {
    if ($value instanceof AdvancedStudent || $value instanceof NormalStudent) {
        $value->runForSecretary();
    }
}
