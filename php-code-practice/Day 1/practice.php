<?php

# data type
$name = "Budi"; // string
$age = 20; // int
$hobby = ["swimming","dota2"]; // array
$exam_result = 9.5; // float or double
$status = true; // boolean

echo(gettype($name)."\n");
echo(gettype($age)."\n");
echo(gettype($hobby)."\n");
echo(gettype($exam_result)."\n");
echo(gettype($status)."\n");

var_dump($name, $age, $hobby, $exam_result, $status);

# control flow
## if else
$name = 10;
if(is_string($name)){
    echo $name;
} else {
    echo $name;
}

## switch case
$role = "admin";
switch ($role) {
    case 'student':
        echo "login as a student";
        break;
    case 'teacher':
        echo "login as a teacher";
        break;
    case 'admin':
        echo "login as an admin";
        break;
    default:
        echo "who you are?";
        break;
}

## While Looping
$a = 0;
while ($a <= 10) {
    echo "nomer: ".$a;
    $a++;
}

## do while
$a = 0;
do {
    echo "nomer: ".$a."\n";
    $a++;
} while ($a <= 10);

## for loop
for ($i=0; $i <= 10; $i++) { 
    echo "nomer: ".$i."\n";
}

## Array
$array = [1,"trio","fadli"];
$array2 = array_push($array,"abi","suryono");
var_dump($array);

## Array Associative
$kelas = [];
$kelas["name"] = "budi";
$kelas["mapel"]= "biologi";
$kelas["nilai"]=  90;
var_dump($kelas);

foreach($kelas as $key => $value){
    echo $key." = ".$value."\n";
};

for ($i=0; $i <=count($array); $i++) { 
    echo "index ".$i." = ".$array[$i]."\n";
}

## Array Multidimensi
$item = [1,"trio","python"];
$items = [
    [1,"trio","python"],
    [2,"budi","pyqt5"],
];
$numbers = [
    [1,2,3],
    [4,5,6]
];

foreach($numbers as $key => $value){
    foreach ($value as $k => $v) {
        echo $numbers[$key][$k];
        echo "\n";
    }
}

var_dump($items);

echo $items[0][2];

foreach ($items as $key => $value) {
    foreach ($value as $k => $v) {
        echo $v;
        echo "\n";
    }
}

?>