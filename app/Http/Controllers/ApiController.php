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
        $data = json_decode($response->getBody(), true);
        foreach($data['stop_info'] as $key=>$u){
            echo $key."<br>" .$u;
        }
            echo "<pre>";
 /* print_r($data);
      $travel=[];
       $travel= [$data['stop_info']['stop_name'],$data['stop_info']['landmark'],$data['stop_info']['address'],
       $data['stop_info']['towards'],$data['stop_info']['connections']];
foreach($travel as $u){
    echo $u."<br>";
}
  
       */ 
       die;
        $match_info = $data['name'][0]['landmark'][0]['address'];
        foreach ($match_info as $key => $value) {
            $match_details = $value['matchInfo'];

        }

        print_r($match_details);
        die();
        return view('front.bus_booking', compact('data', 'match_details'));


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
        echo json_encode ($data);
        die;

        // Process $data as needed

        return view('amen')->with('data'); // or return a view, redirect, etc.
    }
}
