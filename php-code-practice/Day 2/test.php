<?php
// function

// function sayHi($name="user"){
//     return "Hello ".$name."\n";
// }

// $name = "Budi";
// sayHi($name);
// sayHi($name);
// sayHi($name);
// echo sayHi();

// error handling

// try {
//     if(file_exists("data2.txt")){
//         echo "open data";
//     }
//     else {
//         throw new Exception("File Not Found");
//     }
// } 
// catch (Exception $e) {
//     echo $e->getMessage();
// }

// function calc($num){
//     if(!$num){
//         throw new Exception("Divided By Zero", 1);
//     }
//     return 10/$num;
// }

// try {
//     echo calc(0);
// } catch (Exception $e) {
//     echo $e->getMessage();
// }

// File handling

// $filename = "data.txt";
// $open_file = fopen($filename, "a+");
// // echo $open_file;
// $read_file = fread($open_file, filesize($filename));
// echo $read_file;
// $string = "\nHellow World 2\n";
// $write_file = fwrite($open_file, $string)
// // file_put_contents

// PHP JSON

$data = '{
    "id": 1,
    "name": "Leanne Graham",
    "username": "Bret",
    "email": "Sincere@april.biz",
    "address": {
      "street": "Kulas Light",
      "suite": "Apt. 556",
      "city": "Gwenborough",
      "zipcode": "92998-3874",
      "geo": {
        "lat": "-37.3159",
        "lng": "81.1496"
      }
    },
    "phone": ["56442","89494","44324"]
  }';

$result = json_decode($data,true);
// var_dump($result);
// echo $result->name;
// echo $result["name"];

// encode 

$obj = (object) [];
$obj->name = "Budi";
$obj->age = 30;

$data_array = [
    "result" => [
        [
            "name" => "budi",
            "age" =>  30
        ],
        [
            "name" => "angel",
            "age" =>  30
        ]
    ]
];

// var_dump($obj);
$result_tostring = json_encode($data_array,JSON_PRETTY_PRINT);
var_dump($result_tostring);
?>