<?php
// require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use App\Play\User;


class UserTest extends TestCase
{
    public function testClassHasAttributeAge() 
    {
        $attr = 'age';
        $this->assertClassHasAttribute($attr, User::class);
    }
    public function testClassHasAttributeEmail() 
    {
        $attr = 'email';
        $this->assertClassHasAttribute($attr, User::class);
    }
    public function testAgeIsInteger()
    {
        $age = 10.5;
        $user = new User();
        $this->assertIsInt($user->setAge($age));
    }
    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(Exception::class);
        $user = new User();
        $user->setEmail("harlitad");
    }
}
