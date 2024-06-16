<?php
use Illuminate\Support\Facades\Route;

Route::get(uri:'/test', function () {
    return view('welcome', ['name' => 'username']);
});

Route::get(uri: '/test', [\App\Http\Controllers\SimpleController::class, 'test']);

Route::get(uri:'/numbers', [\App\Http\Controllers\EntityController::class, 'index'])->name('numbers');
Route::post(uri:'/numbers', [\App\Http\Controllers\EntityController::class, 'store'])->name('save_number');
Route::get(uri:'/remove-number', [\App\Http\Controllers\EntityController::class, 'delete'])->
where(['id'=>'{A-Za-z8-9]+'])->name('remove_number');

Route::get(uri:'/upload',[\App\Http\Controllers\FileUploadController:: class, 'index']);
Route::post(uri:'/upload',[\App\Http\Controllers\FileUploadController:: class, 'upload']);->name('upload_file');

Route::get(uri:'/user/{id}',[\App\Http\Controllers\EntityController:: class, 'show'])->where(['id' => "[0-1}]+']);
Route::get(uri: '/my_user', [\App\Http\Controllers\MyUserController::class, 'showUser']);
Route::get(uri: '/rederict_test', action:\App\Http\Controllers\TestRederictController::class);

