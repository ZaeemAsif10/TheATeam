<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('team', [WebController::class, 'index'])->name('team');
Route::get('about', [WebController::class, 'about'])->name('about');
Route::get('project', [WebController::class, 'project'])->name('project');
Route::get('al-noor', [WebController::class, 'alNoor'])->name('al-noor');
Route::get('al-jalil', [WebController::class, 'alJalil'])->name('al-jalil');
Route::get('west-marina', [WebController::class, 'westMarina'])->name('west-marina');
Route::get('al-bari', [WebController::class, 'alBari'])->name('al-bari');
Route::get('west-marina-executive', [WebController::class, 'westMarinaExecutive'])->name('west-marina-executive');
Route::get('west-marina-cotalages', [WebController::class, 'westMarinaCotalages'])->name('west-marina-cotalages');
Route::get('marina-sports', [WebController::class, 'marinaSports'])->name('marina-sports');
Route::get('blog', [WebController::class, 'Blog'])->name('blog');
Route::get('news', [WebController::class, 'News'])->name('news');
Route::get('gallery', [WebController::class, 'Gallery'])->name('gallery');
Route::get('contact', [WebController::class, 'Contact'])->name('contact');
Route::get('annual_conference', [WebController::class, 'annualConference'])->name('annual_conference');
Route::get('dubai_events', [WebController::class, 'dubaiEvents'])->name('dubai_events');

