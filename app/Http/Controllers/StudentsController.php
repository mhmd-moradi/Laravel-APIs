<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function groupsGenerator(){
        $students = ["Mohammad", "Malak", "Pablo", "Stephanelle", "Nour", "Ali", "Joe"];
        $doneStudent = [];
        $groups = [];
        $group = [];

        while ((sizeof($doneStudent)) != sizeof($students)) {
            $random = rand(0, sizeof($students)-1);
            if(!in_array($students[$random], $doneStudent)){
                if(sizeof($group) == 1){
                    array_push($group, $students[$random]);
                    array_push($doneStudent, $students[$random]);
                    array_push($groups, $group);
                    $group = [];
                }elseif(sizeof($group) == 0){
                    if(sizeof($doneStudent) == (sizeof($students)-1) ){
                        array_push($group, $students[$random]); 
                        array_push($groups, $group);
                        array_push($doneStudent, $students[$random]);
                    }
                    else{
                        array_push($group, $students[$random]);
                        array_push($doneStudent, $students[$random]);
                    }    
                }
            }
        }

        return response()->json([
            "status" => "Success",
            "groups" => $groups
        ], 200);
    }
}

