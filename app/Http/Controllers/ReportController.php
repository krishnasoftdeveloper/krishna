<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class ReportController extends Controller
{
    //
    public function intregrate_with_paymentGatway(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           return view('paymentmanagement/intregrate_with_paymentGatway' , compact('data'));  
              
      }
      public function payment_report(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           return view('payment_report/payment_report' , compact('data'));  
              
      }

}
