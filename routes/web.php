<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RevisorController;


Route::get('/',[FrontController::class,'welcome'])->name('welcome');
//Categoria mcr
Route::resource('/category', CategoryController::class)->middleware('auth');

Route::get('/announcements/{category}', [FrontController::class , 'indexForCategory'])->name('announcements.category-filter');

Route::get('/user/index',[UserController::class,'index'])->name('user.index');

Route::get('/create/announcement',[AnnouncementController::class,'create'])->name('announcement.create')->middleware('auth');
//Contatti
Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contacts');
Route::post('/contatti/send', [ContactController::class, 'send'])->name('contacts.send');
Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');

// Home revisore
Route::get('/revisor/home',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');
// Accetta annuncio
Route::PATCH('/accetta/annuncio/{announcement}',[RevisorController::class,'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
// Rifiuta annuncio
Route::PATCH('/rifiuta/annuncio/{announcement}',[RevisorController::class,'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');
//Ricerca
Route::get('/ricerca/annuncio',[FrontController::class,'searchAnnouncements'])->name('announcements.search');
Route::get('/lista/annunci',[FrontController::class,'test'])->name('announcements.list');
//Form to make User Revisor
Route::get('/form/revisor', [RevisorController::class, 'viewForm'])->name('revisor.form')->middleware('auth');
Route::post('/revisor/form',[RevisorController::class,'post'])->name('revisor.post');
Route::get('/Accepting/Revisor/{email}', [RevisorController::class, 'MakeRevisor'])->name('revisor.make');
//Route for deleting last Revisor task
Route::get('/getBack', [RevisorController::class, 'getBack'])->name('revisor.getBack');

Route::post('/lingua{lang}', [FrontController::class, 'setLanguage'])->name('setLocale');