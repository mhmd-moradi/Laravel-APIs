<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PalindromeController;
use App\Http\Controllers\TimeCalculationController;
use App\Http\Controllers\ExternalApiController;
use App\Http\Controllers\StudentsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getpalindrome', [PalindromeController::class, 'palindromeFinder'])->name("palindrome-finder");
Route::get('/getseconds', [TimeCalculationController::class, 'secondsCalculators'])->name("seconds-calculator");
Route::get('/getText', [ExternalApiController::class, 'externalApi'])->name("external-api");
Route::get('/getRecipe', [ExternalApiController::class, 'beer_recipe'])->name("beer-recipe");
