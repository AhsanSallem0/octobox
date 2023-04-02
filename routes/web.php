<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataSaveController;
use App\Http\Controllers\StripePaymentController;


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
});

Route::get('/phpinfo', function() {
    return phpinfo();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/insert/data',[DataSaveController::class, 'insert'])->name('data.enter');


Route::get('/success',[DataSaveController::class, 'success'])->name('success');

Route::get('/data',[DataSaveController::class, 'data'])->name('data');
// Route::get('/email',[DataSaveController::class, 'email'])->name('email');





Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});