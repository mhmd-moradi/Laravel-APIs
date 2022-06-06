<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{
    public function palindromeFinder(){
        $strings = array("civic", "test", "radar", "not", "apple", "racecar");

        //find palindrome function
        function Palindrome($string){ 
            if (strrev($string) == $string){ 
                return 1; 
            }
            else{
                return 0;
            }
        } 

        
    }
}
