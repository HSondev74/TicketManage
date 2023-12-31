<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'login']);
Route::post('/login',[LoginController::class, 'loginPost'])->name('login_post');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');



// route event
Route::resource('events', EventController::class);

// route ticket
Route::get('event/{event}/ticket/create/', [TicketController::class, 'create'])->name('ticket.create');
Route::post('event/{event}/ticket/store/', [TicketController::class, 'store'])->name('ticket.store');

// route session
Route::get('event/{event}/session/create/', [SessionController::class, 'create'])->name('session.create');
Route::post('event/{event}/session/store/', [SessionController::class, 'store'])->name('session.store');



