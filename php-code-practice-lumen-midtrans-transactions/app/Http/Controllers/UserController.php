<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\Log;

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

    public function index()
    {
        Log::info('access index');
        return response($content='index', $status=200, $header = ["content-type" => "application/json"]);
    }

    public function ageinvalid()
    {
        Log::info('age invalid');
        return abort(401);
    }

    public function create(Request $request)
    {
        $object["name"] = $request->input("name");
        $object["student"] = $request->input("class");
        // $object = gettype($object);
        // $object = new stdClass();
        return response($content=$object, $status=201, $header = ["content-type" => "application/json", "author" => "harlita"]);
    }
}
