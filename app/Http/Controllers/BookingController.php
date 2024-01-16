<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Booking;

use GuzzleHttp\Client;

class BookingController extends Controller
{
    //
    public function manage_booking(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           $booking = Booking::all();

           return view('booking/manage_booking' , compact('data','booking'));  
              
   }
   public function cancel_or_modify(){
    $data = array();
      if(Session::has('loginId')){
       $data = User::where('id','=',Session::get('loginId'))->first();
       }
       return view('booking/cancel_or_modify' , compact('data'));  
          
}


  public function stopdetails(){
    $url = 'https://qa.ourbus.com//ourbus/wsapi/commuter/stop/stop-65'; // Replace with your API endpoint

    $client = new Client();
    $response = $client->get($url);

    // Handle the API response, e.g., decode JSON response
     $data = json_decode($response->getBody(), true);
    // foreach($data['stop_info'] as $key=>$u){
       
    // }
       
/* print_r($data);
  $travel=[];
   $travel= [$data['stop_info']['stop_name'],$data['stop_info']['landmark'],$data['stop_info']['address'],
   $data['stop_info']['towards'],$data['stop_info']['connections']];
foreach($travel as $u){
echo $u."<br>";
}

   */ 
  //  die;
    // $match_info = $data['name'][0]['landmark'][0]['address'];
    // foreach ($match_info as $key => $value) {
    //     $match_details = $value['matchInfo'];

    // }

    // print_r($match_details);
    // die();

    return view('front.bus_booking', compact('data'));

}


public function save_booking(Request $request){
  $product = new Booking;
  $product->customer_name  = $request->customer_name;
  $product->email = $request->email_id ;
  $product->booking_id = $request->bookingid;
  $product->booking_type = $request->bookingtype;
  $product->booking_date= $request->booking_date;
  $product->from= $request->from;
  $product->to= $request->to;
  $product->booking_status= $request->bookingstatus;
  
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

public function deletebooking(Request $request , $id){
  $data= Booking::findOrFail($id);
  $data->delete();
  return back()->with('danger','Booking deleted successfully');
}
public function editstaff($id){
$data = array();
 if (Session::has('loginId')) {
     $data = User::where('id', '=', Session::get('loginId'))->first();
 }
 
 $staff = Staff::findOrFail($id);

return view('staff.editstaff',compact('data','staff'));
}

}
