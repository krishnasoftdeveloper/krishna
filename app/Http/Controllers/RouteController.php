<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\BusTrainRoute;


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

  public function save_bus_train_route(Request $request){
    $product = new BusTrainRoute;
    $product->type  = $request->type;
    $product->route_name = $request->route_name ;
    $product->stops = $request->stops;
    $product->departure_time = $request->departure_time;
    $product->arivel_time= $request->arivel_time;
    $product->fare= $request->fare;
   
    
    // echo"</pre>";
    // print_r($product);
    // echo"<pre>";
    // die;
     $res =  $product->save();
  
    if($res){
        return back()->with('success','Booking successfully');
   }
    else{
        return back()->with('fail','error');
    }
  
   
  }
}
