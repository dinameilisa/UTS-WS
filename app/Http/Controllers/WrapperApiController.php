<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperApiController extends Controller
{
    public function current()
    {
        $json = Http::get('https://api.openweathermap.org/data/2.5/weather?lat=51.509865&lon=-.118092&appid=d5e9e0b15bc259ab0f551f80782d1565')->json();
        return response()->json($json);
    }

    public function call()
    {
        $json = Http::get('https://api.openweathermap.org/data/2.5/onecall?lat=51.509865&lon=-.118092&exclude=minutely&appid=d5e9e0b15bc259ab0f551f80782d1565')->json();
        return response()->json($json);
    }

    public function day()
    {
        $json = Http::get('https://api.openweathermap.org/data/2.5/forecast?lat=51.509865&lon=-.118092&appid=d5e9e0b15bc259ab0f551f80782d1565&units=standard')->json();
        return response()->json($json);
    }

    public function maps()
    {
        $json = Http::get('https://api.openweathermap.org/data/2.5/air_pollution?lat=51.509865&lon=-.118092&appid=d5e9e0b15bc259ab0f551f80782d1565')->json();
        return response()->json($json);
    }

    
}