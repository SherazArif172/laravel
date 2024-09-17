<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('new');
});



// dynamic routing
Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});


Route::get('/name', [UserController::class,"name"]);

Route::get('/nametwo', [UserController::class,"nametwo"]);

Route::get('/namethree/{name}', [UserController::class,"namethree"]);
Route::get('/admin', [UserController::class,"admin"]);
Route::get('/aboutt', [UserController::class,"aboutt"]);


Route::view("form","form");
Route::post("form",[UserController::class,"addUser"]);
