<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\AddjobController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\DisplayController;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\SearchController;


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

 // Route::get(  '/msdklsd' , [ListingController::Class, 'index'] )
   // ->name( name: 'listings.index');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/display', function () {
    return view('display');
})->name('display');

Route::get('/display', [App\Http\Controllers\DisplayController::class,'index']);



Route::get('/applicant', [App\Http\Controllers\ApplicantController::class,'index']);



Route::get('/calender', function () {
    return view('calender');
})->middleware(['auth'])->name('calender');



Route::get('/candidates', [App\Http\Controllers\CandidatesController::class,'index']);



Route::get('/addjob', function () {
    return view('addjob');
})->name('addjob');

Route::post('/addjob', [AddjobController::class, 'store']);



Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('index', [App\Http\Controllers\IndexController::class,'index']);



Route::get('edit', function () {
    return view('edit');
})->name('edit');

Route::get('edit', [App\Http\Controllers\EditController::class,'index']);

Route::get('apply', function () {
    return view('apply');
})->name('apply');

Route::get('demo',[StudentController::class, 'index'])->name('add');
Route::post('/save',[StudentController::class, 'save'])->name('save');

Route::get('demo',[MarketingController::class, 'index'])->name('add');
Route::post('/save',[MarketingController::class, 'save'])->name('save');

Route::resource('/jobs', JobController::class);



Route::get('demo', [App\Http\Controllers\TagController::class,'index']);

Route::get('display', [App\Http\Controllers\SearchController::class,'index']);


Route::resource('/employe', EmployeController::class);

Route::get('empdata', [App\Http\Controllers\EmpdataController::class,'index']);



require __DIR__.'/auth.php';
