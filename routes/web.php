<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

Route::get(  '/msdklsd' , [ListingController::Class, 'index'] )
    ->name( name: 'listings.index');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/jobs', function () {
    return view('jobs');
})->middleware(['auth'])->name('jobs');

Route::get('/calender', function () {
    return view('calender');
})->middleware(['auth'])->name('calender');

require __DIR__.'/auth.php';
