<?php

use App\Http\Controllers\BookController;
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

Route::view('/','landing');

Route::controller(BookController::class)->group(function(){
    Route::get('home', 'index')->name('home.list');
    Route::delete('book/{book}', 'destroy')->name('book.destroy');
    Route::get('book/{book}', 'showEditForm')->name('book.editForm');
    Route::post('book/{book}', 'update')->name('book.update');
});
