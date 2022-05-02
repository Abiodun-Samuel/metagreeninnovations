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
Route::post('/admin/post_project', [AdminController::class, 'store'])->name('admin.store')->middleware('auth', 'is_admin');
Route::get('/admin/{project:slug}/edit', [AdminController::class, 'edit'])->name('admin.edit')->middleware('auth', 'is_admin');
Route::put('/admin/{project:slug}', [AdminController::class, 'update'])->name('admin.update')->middleware('auth', 'is_admin');
Route::delete('/admin/{project:slug}', [AdminController::class, 'destroy'])->name('admin.destroy')->middleware('auth', 'is_admin');

// Projects route 
Route::get('/project/{project:slug}', [AdminController::class, 'show'])->name('admin.show');

//Clients pages
Route::get('/clients', [ClientController::class, 'index'])->name('clients.home')->middleware('auth', 'is_clients');
// clients page with admin privilege
Route::get('/client/{client:id}/edit', [ClientController::class, 'edit'])->name('clients.edit')->middleware('auth', 'is_admin');
Route::get('/client/{client:id}', [ClientController::class, 'show'])->name('clients.show')->middleware('auth', 'is_admin');
Route::put('/client/{client:id}', [ClientController::class, 'update'])->name('clients.update')->middleware('auth', 'is_admin');
Route::delete('/client/{client:id}', [ClientController::class, 'destroy'])->name('clients.destroy')->middleware('auth', 'is_admin');

Route::post('/client/post_testimonial', [ClientController::class, 'store'])->name('clients.store')->middleware('auth');


// Webpages
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/projects', [PagesController::class, 'project'])->name('projects');
Route::get('/services', [PagesController::class, 'service'])->name('services');

// Contact and Send mail
Route::get('/contact', [FormController::class, 'contact'])->name('contact');
Route::post('/contact/sendmail', [FormController::class, 'sendmail'])->name('sendmail');
Route::post('/subscribe', [FormController::class, 'subscribe'])->name('subscribe');

// Fallback route
Route::fallback(function () {
    return view('errors.404');
});
