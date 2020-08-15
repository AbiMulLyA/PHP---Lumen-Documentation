<?php
namespace App\Person;

class Family {
    public $id, $amount;

    function __construct($id, $amount)
    {
        $this->id = $id;
        $this->amount = $amount;
    }

    function get_Family(){
        return "Family : $this->id has $this->amount person";
    }
}

?>