<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Webpages
Route::get('/', [PagesController::class, 'index']);
Route::get('/About Us', [PagesController::class, 'about']);
Route::get('/Projects', [PagesController::class, 'project']);
Route::get('/projects/{project_page}', [PagesController::class, 'projectpage'])->where('project_page', 'Oral Estate Project|Buena Vista Estate Project 1|Buena Vista Estate Project 2|Lekki County Homes Project|Olusegun Obasanjo Hilltop Project|Olomore Housing Estate Project|Patheon Smart Terrace Project');
Route::get('/Services', [PagesController::class, 'service']);

// Contact and Send mail
Route::get('/Contact Us', [FormController::class, 'contact']);
Route::post('/contact/sendmail', [FormController::class, 'sendmail'])->name('sendmail');
Route::post('/subscribe', [FormController::class, 'subscribe'])->name('subscribe');

// Fallback route
Route::fallback(function () {
    return view('errors.404');
});
