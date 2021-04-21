<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Webpages
Route::get('/', [PagesController::class, 'index']);
Route::get('/About Us', [PagesController::class, 'about']);
Route::get('/Project', [PagesController::class, 'project']);
Route::get('/projects/{project_page}', [PagesController::class, 'projectpage'])->where('project_page', 'Oral Estate Project|Buena Vista Estate Project 1|Buena Vista Estate Project 2|County Homes Project|Hilltop Estate Project|Olomore Housing Estate Project');
Route::get('/Service', [PagesController::class, 'service']);

// Contact and Send mail
Route::get('/Contact Us', [FormController::class, 'contact']);
Route::post('/contact/sendmail', [FormController::class, 'sendmail'])->name('sendmail');

// Fallback route
Route::fallback(function () {
    return view('errors.404');
});
