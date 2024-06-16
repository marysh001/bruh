<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri:'/form', [TestFormController::class, 'displayForm'])->name(name:'show_form');
Route::post(uri:'/form', [TestFormController::class, 'postForm'])->name(name:'post_form');
Route::post(uri:'/book', [BookController::class, 'store'])->name(name:'store_book');
Route::get(uri:'/book {$id}', [BookController::class, 'show'])->name(name:'show_book');

Route::get(uri:'/security_test', [TestSecurityController::class, 'show'])->name(name:'show_security_form');
Route::post(uri:'/security_test', [TestSecurityController::class, 'post'])->name(name:'post_security_form');
