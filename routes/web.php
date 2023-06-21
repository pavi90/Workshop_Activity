<?php

use App\Http\Controllers\CourseController;
use  App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/subject', 'SubjectController@store')->name('course');
Route::get('/subject' , function ()
{
    return view ('subject');

})->name ('subject.form');

Route::get ('/dashboard' , function()
{
    return view ('dashboard');})->middleware(['auth' , 'verified'])->name ('dashboard');