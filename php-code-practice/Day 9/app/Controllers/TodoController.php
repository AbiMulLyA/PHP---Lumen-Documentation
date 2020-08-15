<?php
namespace Demo\Controllers;
use Demo\Models\Todo;

class TodoController 
{

    public function __construct()
    {
        $this->todo = new Todo();
    }
    //CRUD
    public function index()
    {
        return $this->todo::all();
    }

    public function findByUserId($id)
    {
        return $this->todo::where("user_id",$id)->get();
    }

    public function create($object)
    {
        $todo = new Todo();
        $todo->title = $object->title;
        $todo->user_id = $object->user_id;
        $todo->completed = false;
        $todo->save();
        $insertedId = $todo->id; 
        // return $this->findById($insertedId);
    }
}