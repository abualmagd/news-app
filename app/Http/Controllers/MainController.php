<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class MainController extends Controller
{
    
    public function index(){
        $key=env('NEWS_API');
        $url="https://newsdata.io/api/1/latest?apikey={$key}&language=ar";
        $cacheKey = 'latest_news_response';
    $cacheHours = 3;

    $responseData = Cache::remember($cacheKey, now()->addHours($cacheHours), function () use ($url) {
        $response = Http::withoutVerifying()->get($url);
        if ($response->successful()) {
            return $response->json(); // Extract the JSON data
        } else {
            return null; // Or handle the error appropriately
        }
    });


     
        if($responseData){
            
            return view('main',['articles'=>$responseData['results']]);
        }else{
            return view('main',['articles'=>null]);

        }
    }

}
