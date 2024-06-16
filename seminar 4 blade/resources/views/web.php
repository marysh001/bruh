<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(uri: '/home', function(){
return view(view:'home');
Route::get(uri: '/contacts', function(){
return view(view:'contacts');
