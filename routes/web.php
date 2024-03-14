<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Relevant concepts: get & post functions
//MVC is a pattern, not a framework.
//Coursework 1: Models & Databases. Database relationships & seeding
//Start with data & data relationships

Route::get('/', function () {
    return view('welcome');
});



/*Correct Submission
1Model definitions
2Database Seeding
3Seeding Relationships
4Factories
5Factory Relationships
6Conventions*/