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

Route::get('/', function () {
    return view('main');
});
/*************** public university ************ */
Route::get('/home', function () {return view('main');})->name('home');
Route::get('/university', [App\Http\Controllers\Controller::class, 'index'])->name('university');
Route::get('/universities', [App\Http\Controllers\Controller::class, 'all_unversities'])->name('all.universities');
Route::get('/university_result', [App\Http\Controllers\Controller::class, 'search'])->name('university.search');
Route::get('/universities_result', [App\Http\Controllers\Controller::class, 'side_search'])->name('university.side.search');
Route::post('/university_with_location', [App\Http\Controllers\Controller::class, 'search_by_location'])->name('university.what.where');
/*************** Private university ************ */
Route::get('/private/university', [App\Http\Controllers\PrivateUniversityController::class, 'index'])->name('private.university');
Route::get('/private/university_results', [App\Http\Controllers\PrivateUniversityController::class, 'search'])->name('private.university.search');
Route::post('/private/university_with_location', [App\Http\Controllers\PrivateUniversityController::class, 'search_by_location'])->name('private.university.what.where');
