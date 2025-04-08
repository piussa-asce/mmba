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

Route::get('/', [DesktopController::class, 'home']);
Route::get('/team', [DesktopController::class, 'team']);
Route::get('/contacts', [DesktopController::class, 'contacts']);