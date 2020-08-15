<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index($age)
    {
        $data["status"] = "success";
        $data["age"] = $age;
        // $model = new stdClass();
        // $model->name = "model";
        return response($content=$data, $status = 200)
                    ->header("content-type", "application/json")
                    ->header('author', 'harlita');
    }

    public function create(Request $request)
    {
        $data["status"] = "success created";
        $data["result"] = [
            "name" => $request->input("name"),
            "class" => $request->input("class")
        ];
        // $data["name"] = $request->input("name");
        // $data["class"] = $request->input("class");
        return response($data, 201)
                    ->header("content-type", "application/json")
                    ->header('author', 'harlita');
    }

    public function token(Request $request)
    {
        return "token";
    }

    //
}
