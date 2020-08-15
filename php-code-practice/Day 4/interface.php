<?php
// define("NAME","budi");
const AGE = 20;

interface Insurance {
    public function set_insurance($id_insurance);
    public function get_insurance();
}

interface Salary {
    public function set_salary($amount);
    public function get_salary();
}

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

class Info {
    public $list;
    function addInfo(Person $person){
        $this->list[] = $person;
    }
    function showInfo()
    {
        $info = "";
        foreach($this->list as $v) {
            $info .= "Info = ".$v->showName()."\n";
        }
        return $info;
    }
}

class Employee extends Person implements Insurance, Salary {
    protected $id, $company, $id_insurance, $amount_salary;
    function __construct($fname, $lname, $age, $id, $company)
    {
        parent::__construct($fname, $lname, $age);
        $this->id = $id;
        $this->company = $company;
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

$emp1 = new Employee("Putri", "Wati", 30, "12345", "AWS");
$emp2 = new Employee("Andre", "Budi", 23, "00092", "MDD");
$emp3 = new Employee("Wahyu", "Fahrul", 19, "1234890", "REFACTORY");

echo "\n===========SHOW INFO EMPLOYEE============\n";
echo $emp1->showInfo();
echo "\n";
echo $emp2->showInfo();
echo "\n=============INSURANCE===================\n";
$emp1->set_insurance("1234394u");
echo $emp1->get_insurance();
echo "\n";
echo $emp2->get_insurance();
echo "\n================Salaruy==================\n";
$emp1->set_salary(3000);
echo $emp1->get_salary();
echo "\n";
echo $emp2->get_salary();

// $info = new Info;
// $info->addInfo($emp1);
// $info->addInfo($emp2);
// $info->addInfo($emp3);
// // echo $info->showInfo();

?>