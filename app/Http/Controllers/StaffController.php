<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Staff;



class StaffController extends Controller
{
    //
    public function manage_staff(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           $staff = Staff::all();

           return view('staff.manage_staff' , compact('data','staff'));  
              
    }
    public function manage_roll(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           return view('staff.manage_roll' , compact('data'));  
              
    }

    public function save_staff(Request $request){
      $product = new Staff;
      $product->name  = $request->name;
      $product->email = $request->email ;
      $product->phone_number = $request->phone_number;
      $product->booking_date = $request->booking_date;
      $product->destination= $request->destination;
      $product->number_travelers= $request->number_travelers;
      $product->from= $request->from;
      $product->to= $request->to;
      
      // echo"</pre>";
      // print_r($product);
      // echo"<pre>";
      // die;
       $res =  $product->save();
  
      if($res){
          return back()->with('success','Staff Created successfully');
     }
      else{
          return back()->with('fail','error');
      }
    
     
   }
   public function deletestaff(Request $request , $id){
    $data= Staff::findOrFail($id);
    $data->delete();
    return back()->with('danger','staff deleted successfully');
}
public function editstaff($id){
  $data = array();
   if (Session::has('loginId')) {
       $data = User::where('id', '=', Session::get('loginId'))->first();
   }
   
   $staff = Staff::findOrFail($id);
 
  return view('staff.editstaff',compact('data','staff'));
}

public function update_staff(Request $request){
//  dd($request->all());
$product = Staff::findOrFail($request->id);
$product->name  = $request->name;
$product->email = $request->email ;
$product->phone_number = $request->phone_number;
$product->booking_date = $request->booking_date;
$product->destination= $request->destination;
$product->number_travelers= $request->number_travelers;
$product->from= $request->from;
$product->to= $request->to;


$product->update();

if($product){
   return back()->with('success','Glassware update successfully');
}
else{
   return back()->with('fail','error');
}


}

}
