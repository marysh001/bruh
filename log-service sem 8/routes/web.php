<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logs', function () {
    return view('logs');
});

Route::get('/token', function (Request $request){
$token = $request->session()->token();
$token = csrf_token();});
