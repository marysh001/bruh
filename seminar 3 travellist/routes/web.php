<?php
use App\Http\Controllers\EntityController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FormProcessor;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\LibraryUserController;
use App\Http\Controllers\MyUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SendFileController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\TestController;
@@ -54,6 +55,8 @@
    Route::post('/', 'store')->name('form_processor.create');
});

Route::resource('/post', PostController::class);

Route::prefix('/post')->controller(PostController::class)->group(function() {
