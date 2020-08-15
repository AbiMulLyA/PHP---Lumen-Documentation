<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;

class AuthController extends Controller
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

    public function generate(Request $request){
        $key = "example_key";
        $payload = array(
            "iss" => "lumen",
            "sub" => $request->input("name"),
            "pass" => $request->input("password"),
            "iat" => time(),
            "nbf" => time());
        $jwt = JWT::encode($payload, $key);
        $decoded = JWT::decode($jwt, $key, array('HS256'));
        return response()->json($data = ["token" => JWT::encode($payload, env('JWT_SECRET'))]);
        
    }

    // public function Auth(Request $request)
    // {
    //     if($request->input("name")=="harlita"){
    //         $this->generate();
    //     }
    //     return abort(401);
    // }
}
