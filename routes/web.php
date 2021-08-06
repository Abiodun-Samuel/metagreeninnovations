<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ClientController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


// Auth
require __DIR__ . '/auth.php';

// Admin Pages
Route::get('/admin', [AdminController::class, 'index'])->name('admin.home')->middleware('auth', 'is_admin');

//Clients pages
Route::get('/clients', [ClientController::class, 'index'])->name('clients.home')->middleware('auth', 'is_clients');

Route::post('/clients/post_testimonial', [ClientController::class, 'store'])->name('clients.store')->middleware('auth', 'is_clients');


// Webpages
Route::get('/', [PagesController::class, 'index'])->name('home');
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
