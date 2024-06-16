<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post(uri:'/test_parameters',[\App\Http\Controllers\RequestTestController::class,'testRequest']);
Route::get(uri:'/test_cookie',[\App\Http\Controllers\TestCookieController::class,'TestCookie']);
Route::get(uri:'/upload_file',[\App\Http\Controllers\FileUploadController::class, 'showForm'])->name(name: 'showForm');
Route::get(uri:'/upload_file',[\App\Http\Controllers\FileUploadController::class, 'fileUpload'])->name(name: 'uploadFile');
Route::get('get-employee-data',[\App\Http\Controllers\EmployeeController::class,'index']);
Route::post('store-form',[\App\Http\Controllers\EmployeeController::class,'store']);
Route::put('/user/{id}',[\App\Http\Controllers\EmployeeController::class, 'update']);
Route::post(uri:'/json_parce',[\App\Http\Controllers\JsonParceController::class, 'parceJson']);

