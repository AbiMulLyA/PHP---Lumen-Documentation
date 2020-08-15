<?php
namespace App\Model;
// require __DIR__.'/../../vendor/autoload.php';
use MongoDB\Client;


class Employee
{
    public function __construct()
    {
        $this->client = new Client("mongodb://127.0.0.1:27017");
        // $this->employee = $this->employee();
        // $this->db = $this->client->demo;
    }
    public function employee()
    {
        $this->db = $this->client->demo;
        return $this->db;
    }
    public function show()
    {
        $customer = $this->employee()->customer->find([]);
        return $customer;
    }
}


$model = new Employee();