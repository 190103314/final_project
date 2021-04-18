<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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
Route::get('/send',[MailController::class, 'send']);
Route::post('/register', [RegisterController::class, 'uploadsubmit'])->name('add-form');
Route::post('/send', [SendingrController::class, 'uploadsubmit'])->name('add-form');
