<?php
// OOP Basic
// 1. Class Object
// 2. Property dan Method, $this
// 3. Construct
// 4. Object Type
// 5. Inheritance
// 6. overriding
// 7. Access Modifier
// 8. Static Method
// 9. Setter dan Getter

class Person {
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

    protected function showName()
    {
        return "$this->fname $this->lname";
    }
}

$putri = new Person("Putri","Wati",30);
// $putri->fname = "Ajeng";
// $putri->lname = "Larasati";
// $putri->age = 20;
// var_dump($putri);
// echo $putri->showName(); // sudah tidak bisa akses, karena protected
echo "\n";

// empty class bawaan dari php
// $obj = new stdClass;
// $obj->name = "uehrue";

$andre = new Person();
// echo $andre->showName();

// object type
// parsing object sebagai data type ke dalam method class lainnya
// pada contoh dibawah ini akses property hanya bisa dilakukan ketika property atau method memiliki access modifiers public.
class Info {
    function showInfo(Person $person)
    {
        return "Info = $person->fname $person->lname ($person->age tahun)";
    }
}

$info = new Info;
// echo $info->showInfo($putri);

// Employee merupakan child class dari parent class Person
class Employee extends Person {
    protected $id, $company;
    function __construct($fname, $lname, $age, $id, $company)
    {
        // overriding untuk method __construct yang ada di parent class Person
        parent::__construct($fname, $lname, $age);
        // $this variable akan merujuk ke properti dan method yang dimiliki oleh class itu sendiri.
        $this->id = $id;
        $this->company = $company;
    }

    function get_id()
    {
        return $this->id;
    }

    // getter untuk property company (get value company)
    function get_company()
    {
        return $this->company;
    }

    // setter untuk property company (set value company)
    function set_company($new_company)
    {
        $this->company = $new_company;
        return $this->company;
    }

    function showName()
    {
        // echo "putri wati work in AWS with ID 12345";
        // pada $this->propertyname, jika tidak ditemukan property di dalam class tersebut, maka akan mencari di dalam parent class.
        // return "$this->fname $this->lname work in $this->company with ID $this->id";
        // overriding method showName() yang ada di parent class Person menggunakan sintaks parent::showName()
        return parent::showName()." work in $this->company with ID $this->id";
    }

    public static function sayHiStatic()
    {
        echo "Hello Employee --static !";
    }

    public function sayHi()
    {
        // cara memanggil method static dari dalam method class.
        // menggunakan self
        // return self::sayHiStatic();
        return $this->showName();
    }
}

$emp1 = new Employee("Putri", "Wati", 30, "12345", "AWS");
// echo $emp1->get_company(); // getter
// echo "\n";
// echo $emp1->showName(); // AWS
// echo "\n";
// echo $emp1->set_company("company baru"); //setter
// echo "\n";
// echo $emp1->showName(); // company baru
// echo $emp1->showName();
// echo "\n";
// echo $emp1->get_id();
// echo "\n";
// echo $emp1->get_company();
// echo "\n";
echo $emp1->showName();
// echo "\n";
// $emp1->set_company("AWS Reborn");
// echo "\n";
// echo $emp1->get_company();
// echo $emp1->sayHi();

// cara menggunakan method static
// Employee::sayHiStatic();
?>