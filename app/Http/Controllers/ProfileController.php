<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    //
     public function my_profile(){
         $data = array();
           if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
            }
            return view('myprofile/myprofile' , compact('data'));  
       		
    }
    
    public function update_profile(Request $request,$id){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
    

          $code =User::findorfail($id);

          $code->name=$request->name;
          $code->email=$request->email;
          $code->location=$request->location;

          $code->update();
    return back()->with('success','Profile Updated Successfully') ; 

    
} 
 public function change_password()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('myprofile/changepassword', compact('data'));

    }
    
     public function update_password(Request $request,$id){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
    

          $code =User::findorfail($id);

          $code->password= bcrypt($request->new_password); 
          $code->password= bcrypt($request->confirm_newpassword); 

          $code->update();
         
    return back()->with('success','Password Updated Successfully') ; 

    
} 


}
