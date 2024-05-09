<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class , 'homepage'])->name('welcome');

Route::get('create/announcements', [AnnouncementsController::class , 'createAnnouncements'])->name('create.announcements')->middleware('auth');

Route::get('show/announcements/{announcement}', [AnnouncementsController::class , 'showAnnouncements'])->name('show.announcements');
