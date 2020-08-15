<?php
namespace App\Play;
use Exception;

class User
{
    protected $age;
    protected $email;

    public function setAge($age) : int
    {
        return $this->age = $age;
    }
    
    public function getAge() : int
    {
        return $this->age;
    }

    public function setEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("$email is not a valid email address", 1);
        } else {
            return $this->email = $email;
        }
    }

    public function getEmail()
    {
        return $this->email;
    }
}