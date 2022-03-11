<?php

use App\Http\Controllers\ContactController;
use GuzzleHttp\Promise\Create;
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
    return view('glavnaya');
});
Route::post('/contact/submit', [App\Http\Controllers\ContactController::class, 'create'])->name('zayavka');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/kabinet/{id}/delete', [App\Http\Controllers\ContactController::class, 'deleteMessage'])->middleware(['auth'])->name('delete');


Route::get('/kabinet', [App\Http\Controllers\ContactController::class, 'showByUser'])->name('kabinet');

Route::get('/admin',[App\Http\Controllers\AdminController::class, 'showAll'])->middleware(['role:admin'])->name('admin');


