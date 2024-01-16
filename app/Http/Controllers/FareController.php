<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\setTicketPrices;

class FareController extends Controller
{
    //
    public function manage_bus_train(){
        $data = array();
          if(Session::has('loginId')){
           $data = User::where('id','=',Session::get('loginId'))->first();
           }
           return view('routemanagement.manage_bus_train' , compact('data'));  
              
   }
   public function setTicketPrices(){
    $data = array();
      if(Session::has('loginId')){
       $data = User::where('id','=',Session::get('loginId'))->first();
       }
       return view('faremanagement.setTicketPrices' , compact('data'));  
          
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
       return view('faremanagement.ManageFareCategories' , compact('data'));  
          
   }
   
  public function savesetTicketPrices(Request $request){
  $setTicket = new setTicketPrices;
 
  $setTicket->route=$request->route;
  $setTicket->ticket_clas=$request->ticketclas;
  $setTicket->price=$request->price;
  $ticket=$setTicket->save();
  //$success="Insert Successfully";
  return view('setTicketPrices',compact('ticket') );
 
 
     }
}
