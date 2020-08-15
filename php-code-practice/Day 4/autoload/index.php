<?php

require_once("App/init.php");

use App\Person\Employee as EmpPerson;
use App\Person\Family;
// alias
// use App\Product\Employee as EmpProduct;
$emp1_fam = new App\Person\Family("033333",4);
$emp2_fam = new App\Person\Family("1234325",2);
$emp1 = new EmpPerson("Putri", "Wati", 30, "12345", "AWS",$emp1_fam);
$emp2 = new EmpPerson("Andre", "Budi", 23, "00092", "MDD", $emp2_fam);
// $emp3 = new EmpPerson("Wahyu", "Fahrul", 19, "1234890", "REFACTORY");

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
echo "\n================Family==================\n";
$fam = $emp1->get_family();
echo $fam->get_Family();
echo "\n";

?>