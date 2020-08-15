<?php
namespace App\Person;

abstract class Person {
    const ADDRESS = "Yogyakarta";
    public $address = self::ADDRESS;
    public $class = __CLASS__;
    protected $fname;
    public $lname;
    public $age;
    public $nik;

    function __construct($firstname="first name", $lastname="last name", $age="age", $nik = "nik")
    {
        
        $this->fname = $firstname;
        $this->lname = $lastname;
        $this->age = $age;
        $this->nik = $nik;
    }

    abstract protected function showName();

    function get_lname()
    {
        return $this->lname;
    }
}

?>