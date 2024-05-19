<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;

Route::get('/',[FrontController::class,'welcome'])->name('welcome');

Route::get('/announcements/{category}', [FrontController::class , 'indexForCategory'])->name('announcementes.category-filter');

Route::get('/user/index',[UserController::class,'index'])->name('user.index');

Route::resource('/category', CategoryController::class)->middleware('auth');

Route::get('/create/announcement',[AnnouncementController::class,'create'])->name('announcement.create')->middleware('auth');

Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contacts');

Route::post('/contatti/send', [ContactController::class, 'send'])->name('contacts.send');

Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');