<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class RouteController extends Controller
{
    //

    public function manage_bus_train(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           return view('routemanagement.manage_bus_train' , compact('data'));  
              
   }
   public function ManageScheduleRouts(){
    $data = array();
      if(Session::has('loginId')){
       $data = User::where('id','=',Session::get('loginId'))->first();
       }
       return view('routemanagement.managescheduleroutes' , compact('data'));  
          
}

public function seat_availability_spacific(){
    $data = array();
      if(Session::has('loginId')){
       $data = User::where('id','=',Session::get('loginId'))->first();
       }
       return view('routemanagement.seat_availability_spacific' , compact('data'));  
          
}
}
