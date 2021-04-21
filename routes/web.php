<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SendingController;

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
Route::get('/timeto', function () {
    return view('index');
});
Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('index');
});
// Route::post('contact/us',[MailController::class, 'sendEmail'])->name('add-form');

Route::post('contact/us', [SendingController::class, 'contact'])->name('add-form');
Route::get('contact/us', function () {
    return view('contact');
})->name('contact');

Route::post('form/register', [RegisterController::class, 'register'])->name('get-form');
Route::get('form/register', function () {
    return view('forms');
})->name('forms');
