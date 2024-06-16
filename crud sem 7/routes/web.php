<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response as Response;

Route::get('/', function () {
    return view('welcome');
});
use App\Models\user;

Route::get(uri:'/user',[UserController::class, 'index']);
Route::get(uri:'/user/{id}', [UserController::class, 'get']);
Route::post(uri:'/store-user', [UserController::class, 'store']);
Route::get(uri:'/resume', [PdfGeneratorController::class, 'index']);
Route::get('pdf/prewiew',[PDFController::class 'prieview'])->name('pdf.preview');
Route::get('pdf/generate',[PDFController::class, 'generatePDF'])->name('pdf.generate);

Route::get(uri:'/file_download', function(){
return response()->download(file:base_path() .'/demo.pdf', name:'resume');
});
Route::get(uri:'/file_show', function () {
return response()->streamDownload( callback base_path() . '/demo.pdf');
});
