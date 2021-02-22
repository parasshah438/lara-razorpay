<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function index()
    {
        return view('payment.index');
    }

    public function pay_success(Request $request){
       
        $getId = Payment::create($request->all());  
        return Response()->json(['msg'=>'Payment successfully done','status'=> true]);    
    }

    public function thank_you()
    {
        return view('payment.thankyou');
    }

    
}
