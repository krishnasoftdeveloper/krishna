<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    //
   
    public function stopdetails()
    {
        $url = 'https://qa.ourbus.com//ourbus/wsapi/commuter/stop/stop-65'; // Replace with your API endpoint

        $client = new Client();
        $response = $client->get($url);

        // Handle the API response, e.g., decode JSON response
        $sss = json_decode($response->getBody(), true);
        /*foreach($data['stop_info'] as $key=>$u){
            echo $key."<br>" .$u;
        }*/
            echo "<pre>";
 /* print_r($data);
      $travel=[];
       $travel= [$data['stop_info']['stop_name'],$data['stop_info']['landmark'],$data['stop_info']['address'],
       $data['stop_info']['towards'],$data['stop_info']['connections']];
foreach($travel as $u){
    echo $u."<br>";
}
  
       */ 
       
        
      
        return view('front.bus_booking');


        // Process $data as needed

    }

    public function stop()
    {
        $url = 'https://qa.ourbus.com/ourbus/wsapi/commuter/search/stops'; // Replace with your API endpoint

        $client = new Client();
        $response = $client->get($url);

        // Handle the API response, e.g., decode JSON response
        $data = json_decode($response->getBody(), true);
        echo "<pre>";
        print_r($data);
        //echo json_encode ($data);
        die;

        // Process $data as needed

        return view('amen')->with('data'); // or return a view, redirect, etc.
    }
    public function search()
    {
        $url = 'https://ourbus/wsapi/commuter/search/intercity/v2/0'; // Replace with your API endpoint

        $client = new Client();
        $response = $client->get($url);

        // Handle the API response, e.g., decode JSON response
        $data = json_decode($response->getBody(), true);
        echo "<pre>";
        print_r($data);
        echo json_encode ($data);
        die;

        // Process $data as needed

        return view('amen')->with('data'); // or return a view, redirect, etc.
    }
}
