<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\EventController;
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
Route::get('news/slider', [NewsController::class, 'NewsSlider']);
Route::get('create-news-slider', [NewsController::class, 'createNewsSlider']);
Route::post('store_news_slider', [NewsController::class, 'storeNewsSlider']);
Route::get('edit-news-slider/{id}', [NewsController::class, 'editNewsSlider']);
Route::post('update-news-slider', [NewsController::class, 'updateNewsSlider']);
Route::get('delete-news-slider', [NewsController::class, 'deleteNewsSlider']);


Route::get('admin/news', [NewsController::class, 'index']);
Route::get('news/create', [NewsController::class, 'create']);
Route::get('get-news', [NewsController::class, 'getNews']);
Route::post('store-news', [NewsController::class, 'storeNews']);
Route::get('edit-news/{id}', [NewsController::class, 'editNews']);
Route::post('update-news', [NewsController::class, 'updateNews']);
Route::get('delete-news', [NewsController::class, 'deleteNews']);


//Blog Page Routes
Route::get('blog/slider', [BlogController::class, 'BlogSlider']);
Route::get('create-blog-slider', [BlogController::class, 'createBlogSlider']);
Route::post('store_blog_slider', [BlogController::class, 'storeBlogSlider']);
Route::get('edit-blog-slider/{id}', [BlogController::class, 'editBlogSlider']);
Route::post('update-blog-slider', [BlogController::class, 'updateBlogSlider']);
Route::get('delete-blog-slider', [BlogController::class, 'deleteBlogSlider']);

Route::get('admin/blogs', [BlogController::class, 'index']);
Route::get('blogs/create', [BlogController::class, 'create']);
Route::get('get-blogs', [BlogController::class, 'getBlogs']);
Route::post('store-blogs', [BlogController::class, 'storeBlogs']);
Route::get('edit-blogs/{id}', [BlogController::class, 'editBlogs']);
Route::post('update-blogs', [BlogController::class, 'updateBlogs']);
Route::get('delete-blogs', [BlogController::class, 'deleteBlogs']);

// Project Routes
Route::get('admin/projects', [ProjectController::class, 'index']);
Route::get('get-projects', [ProjectController::class, 'getProjects']);
Route::post('store-projects', [ProjectController::class, 'storeProjects']);
Route::get('edit-projects', [ProjectController::class, 'editProjects']);
Route::post('update-projects', [ProjectController::class, 'updateProjects']);
Route::get('delete-projects', [ProjectController::class, 'deleteProjects']);

//project slider routes
Route::get('project/slider', [ProjectController::class, 'ProjectSlider']);
Route::get('create-project-slider', [ProjectController::class, 'createProjectSlider']);
Route::post('store_project_slider', [ProjectController::class, 'storeProjectSlider']);
Route::get('edit-project-slider/{id}', [ProjectController::class, 'editProjectSlider']);
Route::post('update-project-slider', [ProjectController::class, 'updateProjectSlider']);
Route::get('delete-project-slider', [ProjectController::class, 'deleteProjectSlider']);


//project detail routes
Route::get('project/details', [ProjectController::class, 'ProjectDetail']);
Route::get('create-project-detail', [ProjectController::class, 'createProjectDetail']);
Route::post('store_project_detail', [ProjectController::class, 'storeProjectDetail']);
Route::get('edit-project-detail/{id}', [ProjectController::class, 'editProjectDetail']);
Route::post('update-project-detail', [ProjectController::class, 'updateProjectDetail']);
Route::get('delete-project-detail', [ProjectController::class, 'deleteProjectDetail']);


//Gallery routes
Route::get('admin/block', [GalleryController::class, 'index']);
Route::get('get-block', [GalleryController::class, 'getBlock']);
Route::post('store-block', [GalleryController::class, 'storeBlock']);
Route::get('edit-block', [GalleryController::class, 'editBlock']);
Route::post('update-block', [GalleryController::class, 'updateBlock']);
Route::get('delete-block', [GalleryController::class, 'deleteBlock']);
Route::get('admin/gallery', [GalleryController::class, 'Gallery']);
Route::get('gallery/create', [GalleryController::class, 'GalleryCreate']);
Route::post('gallery/store', [GalleryController::class, 'GalleryStore']);



// Events Routes
Route::get('admin/events', [EventController::class, 'index']);
Route::get('get-events', [EventController::class, 'getEvents']);
Route::post('store-events', [EventController::class, 'storeEvents']);
Route::get('edit-events', [EventController::class, 'editEvents']);
Route::post('update-events', [EventController::class, 'updateEvents']);
Route::get('delete-events', [EventController::class, 'deleteEvents']);


//Events Slider routes
Route::get('events/slider', [EventController::class, 'EventsSlider']);
Route::get('create-events-slider', [EventController::class, 'createEventsSlider']);
Route::post('store_events_slider', [EventController::class, 'storeEventsSlider']);
Route::get('edit-events-slider/{id}', [EventController::class, 'editEventsSlider']);
Route::post('update-events-slider', [EventController::class, 'updateEventsSlider']);
Route::get('delete-events-slider', [EventController::class, 'deleteEventsSlider']);


//Events Annual
Route::get('annual_event', [EventController::class, 'annualEvent']);
Route::get('annual_event/create', [EventController::class, 'annualEventCreate']);
Route::post('annual_event/store', [EventController::class, 'annualEventStore']);
Route::get('annual_event/edit/{event_id}', [EventController::class, 'annualEventEdit']);
Route::get('annual_event/update/{event_id}', [EventController::class, 'annualEventUpdate']);



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

Route::get('more/{id}', [WebController::class, 'More'])->name('more');




Route::get('projects/{id}', [WebController::class, 'Projects']);
Route::get('events/{id}', [WebController::class, 'Events']);

Route::get('gallery-images', [WebController::class, 'GalleryImages']);
Route::get('all-gallery-images', [WebController::class, 'AllGalleryImages']);
