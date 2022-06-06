<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{
    public function palindromeFinder(){
        $strings = array("civic", "test", "radar", "not", "apple", "racecar");

        //find palindrome function
        function palindrome($string){ 
            if (strrev($string) == $string){ 
                return 1; 
            }
            else{
                return 0;
            }
        }

        $palindromes = 0;
        foreach ($strings as $string) {
            if(palindrome($string))
                $palindromes += 1;
        }

        return response()->json([
            "status" => "Success",
            "number_of_palindromes" => $palindromes
        ], 200);
    }
}
