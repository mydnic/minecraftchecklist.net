<?php

use Illuminate\Foundation\Application;
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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/checklist', 'ObjectiveController@index')->name('objective.index');

Route::get('/about', 'HomeController@about')->name('about');

Route::middleware('auth')->get('/objectives/create', 'ObjectiveController@create')->name('objective.create');
Route::middleware('auth')->post('/objectives', 'ObjectiveController@store')->name('objective.store');

Route::middleware('auth')->prefix('user')->group(function () {
    Route::post('objective-toggle', 'ObjectiveController@toggle')->name('objective.toggle');

    Route::resource('worlds', 'WorldController');
    Route::put('worlds/{world}/default', 'WorldController@setAsDefault')->name('worlds.default');
});

require __DIR__ . '/auth.php';
