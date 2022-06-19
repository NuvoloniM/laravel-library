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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::middleware('auth')
->prefix('admin')
->name('admin.')
->namespace('Admin')
->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/books', 'BookController');
    Route::resource('/authors', 'AuthorController');
});

// alla fine di questo file aggiungiamo una pagina di fallback che va a mappare tutte le rotte non intercettate nelle istruzioni precedenti
// restituisce la view principale 
Route::get("{any?}", function(){
    return view("guest.home");
})->where("any", ".*");
