<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('new');
});
Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});
