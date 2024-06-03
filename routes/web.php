<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http; 

Route::get('/', function () {
    $locations = ['Jakarta', 'Toronto', 'Canada', 'Tokyo']; 
    $apiKey = 'a1db5e0d1559fbde16dbe4224cc4f7a5'; 

    $weatherData = []; 

    foreach ($locations as $location) {
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}");
        
        $weatherData[$location] = $response->json();
    }

    dump($weatherData); 

    return view('welcome');
});
