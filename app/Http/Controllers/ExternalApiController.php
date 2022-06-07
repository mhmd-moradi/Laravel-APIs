<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExternalApiController extends Controller
{
    public function externalApi(){
        $contents = file_get_contents("https://icanhazdadjoke.com/slack");
        $contents = utf8_encode($contents);
        $results = json_decode($contents); 
        //print_r($results->attachments);
        //$results = $results["attachments"];

        return response()->json([
            "joke_text" => ($results->attachments)[0]-> text
        ], 200);
    }

    public function beer_recipe(){
        $contents = file_get_contents("https://api.punkapi.com/v2/beers");
        $contents = utf8_encode($contents);
        $results = json_decode($contents); 
        //print_r($results->attachments);
        //$results = $results["attachments"];
        $random = rand(0, sizeof($results));
        
        return response()->json([
            "text" => $results[$random ]
        ], 200);
    }
}
