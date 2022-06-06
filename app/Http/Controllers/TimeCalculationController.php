<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeCalculationController extends Controller
{
    public function secondsCalculators(){

        $date = new \DateTime();
        $date2 = new \DateTime( '1732-04-14 00:00:00' );

        $diff = $date->getTimestamp() - $date2->getTimestamp();


        return response()->json([
            "status" => "Success",
            "number_of_seconds" => $diff
        ], 200);
    }
}
