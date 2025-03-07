<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class MainController extends Controller
{
    
    public function index(){

        $response=Http::get('https://newsdata.io/api/1/latest?apikey=pub_7347980567b97f55097d99baba7f93240d14b&language=ar');
     
        if($response->successful()){
            $data = $response->json();
            return view('main',['articles'=>$data['results']]);
        }else{
                return Response()->json($response->status(),'failed');
        }
        
    }

}
