<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SentSMS;

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

/// load sms view
Route::get('/sms', function () {
    return view('SentSMS');
});

Route::post('/sms',[SentSMS::class,'sent_message']);


 
