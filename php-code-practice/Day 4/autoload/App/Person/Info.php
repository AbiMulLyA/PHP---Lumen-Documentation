<?php
namespace App\Person;

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

?>