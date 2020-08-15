<?php

namespace App\Http\Controllers;
use App\Author;

class AuthorController extends Controller
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

    public function showall()
    {
        $result = Author::all();
        return response()->json($result);
    }

    //
}
