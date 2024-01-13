<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;


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
}
