<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Webpages
Route::get('/', [PagesController::class, 'index']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/project', [PagesController::class, 'project']);
Route::get('/service', [PagesController::class, 'service']);

// Forms
Route::get('/forms/{form_page}', [FormController::class, 'forms']);
