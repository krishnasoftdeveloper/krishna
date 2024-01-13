<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class BusTrainController extends Controller
{
    //
    public function Managebuses_trains(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           return view('bustrainmanagement/manage_bus_train' , compact('data'));  
              
   }
   public function track_bus_trains(){
    $data = array();
      if(Session::has('loginId')){
       $data = User::where('id','=',Session::get('loginId'))->first();
       }
       return view('bustrainmanagement/track_bus_trains' , compact('data'));  
          
}

public function moniter_payment(){
  $data = array();
    if(Session::has('loginId')){
     $data = User::where('id','=',Session::get('loginId'))->first();
     }
     return view('bustrainmanagement/moniter_payment' , compact('data'));  
        
}
}
