<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\ManageUser;


class UserController extends Controller
{
    //
    public function manage_user_account(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           $manage_user_fetch=ManageUser::all();

           return view('user.manage-user-account' , compact('data','manage_user_fetch'));  
              
   }
   public function view_booking_history(){
    $data = array();
      if(Session::has('loginId')){
       $data = User::where('id','=',Session::get('loginId'))->first();
       }
       return view('user.view_booking_history' , compact('data'));  
          
}
public function save_user_account(Request $request){
   

  $manage_user=new ManageUser;
 $manage_user->image=$request->file('image')->store('uploads');

  $manage_user->name=$request->name;
  $manage_user->last_name=$request->last_name;
  $manage_user->email=$request->email;
  $manage_user->password=$request->password;
  $manage_user->roll=$request->roll;
  $manage_user->phone_no=$request->contact_number;
  $manage_user->state=$request->state;
  $manage_user->address=$request->address;
  $manage_user->city=$request->city;
  $success="Insert Successfully";
  $manage_user->save();

 if($manage_user){
        return back()->with('success','successfully');
   }
    else{
        return back()->with('fail','error');
    }


}

public function manage_user_delete($id){
echo $id;
$manage_user= ManageUser::find($id);
$delete= $manage_user->delete();
return back()->with('danger','user deleted successfully');

}


}
