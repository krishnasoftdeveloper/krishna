<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\setTicketPrices;
use App\Models\DiscountOffer;
use App\Models\ManageFareCategories;

class FareController extends Controller
{
    //
    public function manage_bus_train(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           $discount_offer = DiscountOffer::all();
           dd($discount_offer);
           die;

           return view('routemanagement.manage_bus_train' , compact('data','discount_offer'));  
              
   }
   public function setTicketPrices(){
    $data = array();
      if(Session::has('loginId')){
       $data = User::where('id','=',Session::get('loginId'))->first();
       }
       $setTicketPrices = setTicketPrices::all();

       return view('faremanagement.setTicketPrices' , compact('data','setTicketPrices'));  
          
   }
   public function ApplyDiscountorOffers(){
    $data = array();
      if(Session::has('loginId')){
       $data = User::where('id','=',Session::get('loginId'))->first();
       }
       return view('faremanagement.ApplyDiscountorOffers' , compact('data'));  
          
   }
   public function ManageFareCategories(){
    $data = array();
      if(Session::has('loginId')){
       $data = User::where('id','=',Session::get('loginId'))->first();
       }
       $manage_fare = ManageFareCategories::all();

       return view('faremanagement.ManageFareCategories' , compact('data','manage_fare'));  
          
   }
   
  public function savesetTicketPrices(Request $request){
  $setTicket = new setTicketPrices;
 
  $setTicket->route=$request->route;
  $setTicket->ticket_clas=$request->ticketclas;
  $setTicket->price=$request->price;
  $ticket=$setTicket->save();
  //$success="Insert Successfully";
  if($ticket){
    return back()->with('success','Ticket successfully');
  }
   else{
    return back()->with('fail','error');
   }
 
 
}
public function ticket_delete(Request $request , $id){
  $data= setTicketPrices::findOrFail($id);
  $data->delete();
  return back()->with('danger','Booking deleted successfully');
}

public function discount_offer(Request $request){
  // echo "hell";
   
 $discount_offer= new DiscountOffer;
 $discount_offer->route=$request->route;
 $discount_offer->discounttype=$request->discounttype;
 $discount_offer->discountvalue=$request->discountvalue;

 $discount_offer->validity=$request->validity;
 $discount=  $discount_offer->save();

 if($discount){
  return back()->with('success','Discount Offer Created successfully');
}
 else{
  return back()->with('fail','error');
 }

}

public function manage_fare_categories(Request $request){
  $manage_fare=  new ManageFareCategories;
  $manage_fare->category_name=$request->category_name;
  $manage_fare->descrption=$request->descrption;
  $manage_fare->base_price=$request->base_price;
  $manage_fare=$manage_fare->save();
  if($manage_fare){
    return back()->with('success','ManageFareCategories Created successfully');
  }
   else{
    return back()->with('fail','error');
   }

}

}
