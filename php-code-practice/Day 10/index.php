<?php
require __DIR__.'/vendor/autoload.php'; // include Composer's autoloader
use App\Model\Employee;

$newEmployee = new Employee();
// print_r($newEmployee->show());
$employees = $newEmployee->show();
foreach ($employees as $item) {
    echo $item->name;
    echo "\n";
    echo $item->email;
    echo "\n";
    echo $item->address;
    echo "\n";
}


// $client = new MongoDB\Client("mongodb://127.0.0.1:27017");

// $db = $client->demo;

// foreach ($db->customer->find([]) as $item) {
//     var_dump($item);
// }



// foreach ($db->listCollections() as $col) {
//     var_dump($col);
// }

// mongodb -> un-check windows service
// https://pecl.php.net/package/mongodb/1.7.5/windows -- DLL List, version php & thread safe
// copy php_mongodb.dll ke php/ext/
// add extension di php.ini
// mongodb library -- composer require mongodb/mongodb



// $college = $client->college;
// // show databases
// // foreach ($client->listDatabases() as $databaseInfo) {
// //     var_dump($databaseInfo);
// // }

// // create collection

// $insertOneResult = $college->users->insertOne([
//     'name' => 'harlita',
//     'email' => 'harlitad@mail.com'
// ]);

// print_r($insertOneResult);

// // show * from users
// // $getAll = $college->users->find(["name"=>"harlita"]);
// // print_r($getAll);
