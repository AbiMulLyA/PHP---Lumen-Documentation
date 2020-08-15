<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
    
    }

    public function showall()
    {
        $result = Order::all();
        return response()->json($result);
    }

    public function showId($id)
    {
        return Order::find($id);
    }

    public function create(Request $request)
    {
        $o = new Order;
        $o->user_id = $request->user_id;
        $o->order_status = "create";
        $o->save();
        return $this->showId($o->id);
    }
}
