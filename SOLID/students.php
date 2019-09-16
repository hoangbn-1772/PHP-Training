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

interface InfStudy
{
    function studyEnglish();
    function studyFrench();
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


class AdvancedStudent extends Student2 implements InfStudy
{
    public function payTuitionFee()
    {
        return self::$STANDARD_FEE * 0.8;
    }

    function studyEnglish()
    {
        // TODO: Implement studyEnglish() method.
    }

    function studyFrench()
    {
        // TODO: Implement studyFrench() method.
    }
}

class ForeignStudent extends Student2
{
    public function payTuitionFee()
    {
        return self::$STANDARD_FEE * 1.3;
    }
    // Other function
}

class NormalStudent extends Student2 implements InfStudy
{
    public function payTuitionFee()
    {
        return self::$STANDARD_FEE;
    }

    function studyEnglish()
    {
        // TODO: Implement studyEnglish() method.
    }

    function studyFrench()
    {
        // TODO: Implement studyFrench() method.
    }
}
