<?php
namespace App\Person;
use App\Person\Family;

class Employee extends Person implements Insurance, Salary {
    protected $id, $company, $id_insurance, $amount_salary, $family;
    function __construct($fname, $lname, $age, $id, $company, Family $family)
    {
        // $this->family = new Family($id_family, $amount_family);
        $this->family = $family;
        parent::__construct($fname, $lname, $age);
        $this->id = $id;
        $this->company = $company;
    }

    function get_family() {
        return $this->family;
    }

    function set_salary($amount)
    {
        return $this->amount_salary = $amount;
    }

    function get_salary()
    {
        if($this->amount_salary) {
            return "$$this->amount_salary";
        }
        return "Gaji belum disetting";
    }

    function set_insurance($id_insurance) {
        return $this->id_insurance = $id_insurance;
    }

    function get_insurance() {
        if($this->id_insurance){
            return $this->id_insurance;
        } else {
            return "Sorry belum ada asuransi";
        }
    }

    function get_id()
    {
        return $this->id;
    }

    function get_company()
    {
        return $this->company;
    }

    function set_company($new_company)
    {
        $this->company = $new_company;
        return $this->company;
    }

    function showName(){
        return "$this->fname $this->lname";
    }

    function showInfo()
    {
        return $this->showName()." work in $this->company with ID $this->id";
    }

    public static function sayHiStatic()
    {
        echo "Hello Employee --static !";
    }

    public function sayHi()
    {
        return "Hello ".$this->get_lname();
    }
}
?>