<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/user/index',[UserController::class,'index'])->name('user.index');

Route::resource('/category', CategoryController::class)->middleware('auth');

Route::get('create/announcement',[AnnouncementController::class,'create'])->name('announcement.create')->middleware('auth');
