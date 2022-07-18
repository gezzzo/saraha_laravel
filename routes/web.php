<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Send Message
Route::get('/send/{id}', [App\Http\Controllers\MessageController::class, 'send'])->name('message.send');
// store Message
Route::post('/store', [App\Http\Controllers\MessageController::class, 'store'])->name('message.store');


Route::get('/visits', [App\Http\Controllers\HomeController::class, 'show_visits'])->name('visits');
Route::get('/done',function (){
    return view("done");
})->name('done');
