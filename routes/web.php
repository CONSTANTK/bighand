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
   return view('welcome');
});

  // Route::get('/', function () {
  //   return view('services');
 // });
   //Route::get('/', function () {
 //    return view('about');
// });

 //Route::get('/about', [\App\Http\Controllers\Front\AboutController::class,'index'])->name('front.about');
 Route::get('about-us', [\App\Http\Controllers\Front\AboutController::class,'about'])->name('about');

//  Route::get('/', [\App\Http\Controllers\Front\WelcomeController::class,'index'])->name('front.welcome');
  Route::get('home', [\App\Http\Controllers\Front\WelcomeController::class,'welcome'])->name('welcome');

//Route::get('/services', [\App\Http\Controllers\Front\ServicesController::class,'index'])->name('front.services');
Route::get('our-services', [\App\Http\Controllers\Front\ServicesController::class,'services'])->name('services');

 // Route::get('/projects', [\App\Http\Controllers\Front\ProjectsController::class,'projects'])->name('front.projects');
  Route::get('our-projects', [\App\Http\Controllers\Front\ProjectsController::class,'projects'])->name('projects');

   // Route::get('/blog', [\App\Http\Controllers\Front\BlogController::class,'blog'])->name('front.blog');
    Route::get('blog', [\App\Http\Controllers\Front\BlogController::class,'blog'])->name('blog');

   // Route::get('/contact', [\App\Http\Controllers\Front\ContactController::class,'contact'])->name('front.contact');
    Route::get('contact-us', [\App\Http\Controllers\Front\ContactController::class,'contact'])->name('contact');

    Route::post('contact-us', [\App\Http\Controllers\Front\ContactController::class,'store'])->name('contact.store');

   // Route::get('/team', [\App\Http\Controllers\Front\TeamController::class,'team'])->name('front.team');
    Route::get('our-team', [\App\Http\Controllers\Front\TeamController::class,'team'])->name('team');

   // Route::get('/testimonials', [\App\Http\Controllers\Front\TestimonialsController::class,'testimonials'])->name('front.testimonials');
    Route::get('client-testimonies', [\App\Http\Controllers\Front\TestimonialsController::class,'testimonials'])->name('testimonials');
