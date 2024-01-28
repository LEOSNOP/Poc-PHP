<?php

use Illuminate\Support\Facades\Route;

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

use \App\Http\Controllers\Event;

Route::get('/', [Event::class, 'index']);

Route::get('/pagina2', [Event::class, 'page2']);

Route::get('/register', [Event::class, 'registerPage']);

Route::get('/login', [Event::class, 'loginPage']);

