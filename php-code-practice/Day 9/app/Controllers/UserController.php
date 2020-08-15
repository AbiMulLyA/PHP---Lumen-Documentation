<?php
namespace Demo\Controllers;
use Demo\Models\User;
use Demo\Models\Todo;

class UserController 
{

    public function __construct()
    {
        $this->user = new User();
    }
    //CRUD
    public function index()
    {
        return $this->user::all();
    }

    public function findById($id)
    {
        return $this->user::find($id);
    }

    public function create(Object $object)
    {
        $user = new User();
        $todo = new Todo();
        $user->name = $object->name;
        $user->save();
        $todo->title = "first todo";
        $todo->completed = false;
        $todo->user_id = $user->id;
        $todo->save();
        $insertedId = $user->id; 
        return $this->findById($insertedId);
    }
}