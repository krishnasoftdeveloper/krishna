<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class UserController extends Controller
{
    //
    public function manage_user_account(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           return view('user.manage-user-account' , compact('data'));  
              
   }
   public function view_booking_history(){
    $data = array();
      if(Session::has('loginId')){
       $data = User::where('id','=',Session::get('loginId'))->first();
       }
       return view('user.view_booking_history' , compact('data'));  
          
}
   
}
