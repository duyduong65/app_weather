<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        $client = new Client();
        $res = $client->get('http://api.openweathermap.org/data/2.5/weather?q=Hanoi&appid=c8f9a5c5f417f386b8751111cc51e669');
        $data = $res->getBody();
        $data = json_decode($data);
//        dd($data);
        return view('weather.index',compact('res'));
    }
}
