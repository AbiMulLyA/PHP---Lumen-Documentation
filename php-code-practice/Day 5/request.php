<?php

// post 
// get https://jsonplaceholder.typicode.com/users/1
// post https://httpbin.org/post

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://food.grab.com/id/id/restaurants" ); // set url
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // return string
$result = curl_exec($curl);

var_dump($result);
if(curl_error($curl) != null){
    // 
}
curl_close($curl);

// $data = ["id"=>1, "name"=> "budi"];

// $curl = curl_init();
// // curl_setopt($curl, CURLOPT_URL, "https://httpbin.org/post");
// // curl_setopt($curl, CURLOPT_POST, true);
// // curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
// // curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-type: application/json"]);
// // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// $options = [
//     CURLOPT_URL => "https://httpbin.org/post",
//     CURLOPT_POST => true,
//     CURLOPT_POSTFIELDS => json_encode($data),
//     CURLOPT_HTTPHEADER => ["Content-type: application/json"],
//     CURLOPT_RETURNTRANSFER => true
// ];

// curl_setopt_array($curl, $options);

// $result = curl_exec($curl);
// var_dump($result);

?>