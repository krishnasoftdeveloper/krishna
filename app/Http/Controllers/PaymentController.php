<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\MoniterPayment;
use App\Models\HandleRefunds;


class PaymentController extends Controller
{
    //
    public function moniter_payment(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           return view('paymentmanagement/moniter_payment' , compact('data'));  
              
      }
      public function intregrate_with_paymentGatway(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           return view('paymentmanagement/intregrate_with_paymentGatway' , compact('data'));  
              
      }
      public function moniter_payment_save(Request $request){
        $moniter_payment=  new MoniterPayment;
        $moniter_payment->transcation_ID=$request->transcation_ID;
        $moniter_payment->start_date=$request->start_date;
        $moniter_payment->end_date=$request->end_date;
        $moniter_payment=   $moniter_payment->save();

        return view('moniter_payment.blade',$moniter_payment);
  
      }

      public function handle_refunds(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           return view('paymentmanagement/handle_refunds' , compact('data'));  
              
      }
      public function handle_refunds_save(Request $request){
        $handle_refunds=new HandleRefunds;
        $handle_refunds->transaction_id=$request->transaction_id;
        $handle_refunds->reason_Refunds	=$request->reason_Refunds;
        $handle_refunds->save();
        return view('handle_refund');
        
    }
    

    
}
