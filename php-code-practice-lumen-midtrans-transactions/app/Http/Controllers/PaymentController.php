<?php

namespace App\Http\Controllers;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use stdClass;

class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $key;

    public function __construct()
    {
        $this->key = env($key='KEY_SERVER');
    }

    public function showAll()
    {
        $result = Payment::all();
        return response()->json($result);
    }

    public function showId($id)
    {
        return Payment::find($id);
    }

    public function create(Request $request)
    {
        // insert to table payment
        $payment = new Payment();
        $payment->payment_type = $request['data.attributes.payment_type'];
        $payment->order_id = $request['data.attributes.order_id'];
        $payment->gross_amount = $request['data.attributes.gross_amount'];
        $payment->transaction_time = time();
        $payment->save();
        // should try
        // send payment attributes to midtrans endpoint
        $midtrans = $this->createToMidtrans($request['data.attributes']);
        $payment = $this->showId($payment->id);
        $payment->transaction_status = $midtrans['transaction_status'];
        $payment->transaction_id = $midtrans['transaction_id'];
        $payment->save();
        $newobject['data'] = $this->showId($payment->id);
        // test va_number
        $newobject['va_number'] = $midtrans['va_numbers'][0]['va_number'];
        return $newobject;
    }

    public function createToMidtrans($payment)
    {
        $transaction = array(
            "payment_type" => $payment['payment_type'],
            "transaction_details" => [
                "gross_amount" => $payment['gross_amount'],
                "order_id" => $payment['order_id']
            ],
            "bank_transfer" => [
                "bank" => $payment['bank']
            ]
        );
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Basic '.$this->key,
            'Content-Type' => 'application/json'
        ])->post('https://api.sandbox.midtrans.com/v2/charge', $transaction);
        return $response->json();
    }

    public function notification(Request $request)
    {
        $payment = new Payment();
        $payment = $payment->where('order_id', $request->order_id)->first();
        $payment->transaction_status = $request->transaction_status;
        $payment->transaction_time = $request->transaction_time;
        $payment->update();
    }
}
