<?php


use App\Livewire\Dashboard;
use App\Livewire\RequestBreakdown;
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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/home', function () {
        return view('layouts.auth.components.home');
    })->name('home');
    Route::get('/chatbot', function () {
        return view('layouts.auth.components.chatbot');
    })->name('chatbot');
    Route::get('/help', function () {
        return view('layouts.auth.components.help');
    })->name('help');
    Route::get('/settings', function () {
        return view('layouts.auth.components.settings');
    })->name('settings');
    Route::get('privacypolicy', function () {
        return view('layouts.auth.components.privacypolicy');
    })->name('privacypolicy');
    Route::get('termsandconditions', function () {
        return view('layouts.auth.components.termsandconditions');
    })->name('termsandconditions');
    Route::get('transactionhistory', function () {
        return view('layouts.auth.components.transactionhistory');
    })->name('transactionhistory');
    Route::get('request', function () {
        return view('layouts.auth.components.request');
    })->name('request');
    Route::get('aboutus', function () {
        return view('layouts.auth.components.aboutus');
    })->name('aboutus');
    Route::get('change-profile', function () {
        return view('layouts.auth.components.change-profile');
    })->name('change-profile');
    Route::get('dashboard1', Dashboard::class)->name('dashboard1');
});

Route::redirect('/dashboard', '/home',)->name('dashboard');

Route::fallback(function () {
    return view('errorhandler');
})->name('404');
