<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();


//INSERIRE ALLA FINE DELLE ROTTE

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
    //admin dashboard
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('posts', 'PostController')->parameters([
        'posts' => 'post:slug'
    ]);
});




//INSERIRE ALLA FINE DELLE ROTTE
Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');
