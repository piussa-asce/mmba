<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller as DesktopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Portuguese
Route::get('/', [DesktopController::class, 'home']);
Route::get('/team', [DesktopController::class, 'team']);
Route::get('/contacts', [DesktopController::class, 'contacts']);
Route::get('/privacy', [DesktopController::class, 'privacy']);
Route::get('/terms', [DesktopController::class, 'terms']);

// English
Route::get('/en', [DesktopController::class, 'home_en']);
Route::get('/team/en', [DesktopController::class, 'team_en']);
Route::get('/contacts/en', [DesktopController::class, 'contacts_en']);
Route::get('/privacy/en', [DesktopController::class, 'privacy_en']);
Route::get('/terms/en', [DesktopController::class, 'terms_en']);