<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\BlogController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'redirectAdmin'])->name('index');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


//Home Page Slider Routes
Route::get('admin/slider', [HomeController::class, 'index']);
Route::get('get-slider', [HomeController::class, 'getSlider']);
Route::post('store-slider', [HomeController::class, 'storeSlider']);
Route::get('edit-slider', [HomeController::class, 'editSlider']);
Route::post('update-slider', [HomeController::class, 'updateSlider']);
Route::get('delete-slider', [HomeController::class, 'deleteSlider']);


//News Page Routes
Route::get('admin/news', [NewsController::class, 'index']);
Route::get('get-news', [NewsController::class, 'getNews']);
Route::post('store-news', [NewsController::class, 'storeNews']);
Route::get('edit-news', [NewsController::class, 'editNews']);
Route::post('update-news', [NewsController::class, 'updateNews']);
Route::get('delete-news', [NewsController::class, 'deleteNews']);

//Blog Page Routes
Route::get('admin/blogs', [BlogController::class, 'index']);
Route::get('get-blogs', [BlogController::class, 'getBlogs']);
Route::post('store-blogs', [BlogController::class, 'storeBlogs']);
Route::get('edit-blogs', [BlogController::class, 'editBlogs']);
Route::post('update-blogs', [BlogController::class, 'updateBlogs']);
Route::get('delete-blogs', [BlogController::class, 'deleteBlogs']);





//Website Routes
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

