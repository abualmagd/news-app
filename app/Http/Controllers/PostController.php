<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function show($id){
        $key=env('NEWS_API');
        $url="https://newsdata.io/api/1/latest?apikey={$key}&id={$id}";
        $cacheKey = $id;
        $cacheHours = 3;

        $responseData=Cache::remember($cacheKey,now()->addHour($cacheHours),function() use($url){

            $response=Http::withoutVerifying()->get($url);
            if($response->successful()){
                return $response->json();
            }else{
                return null;
            }
            
        });

       if($responseData){
        return view('post',['post'=>$responseData['results'][0]]);
       }else{
        return view('post',['post'=>null]);
       }
    }


}
