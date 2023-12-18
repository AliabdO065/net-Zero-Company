<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
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

//frontend 
Route::group(['as'=>'fronted.' ], function () {
    Route::get('/', [FrontedController::class,'home'])->name('index'); 
    Route::get('/home', [FrontedController::class,'home'])->name('index'); 
    Route::get('/about', [FrontedController::class,'about'])->name('about'); 
    Route::get('/services', [FrontedController::class,'services'])->name('services'); 
    Route::get('/projects', [FrontedController::class,'projects'])->name('projects'); 
    Route::get('/projects/details/{i}', [FrontedController::class,'projectDetails'])->name('projectDetails'); 
    Route::get('/news', [FrontedController::class,'news'])->name('news'); 
    Route::get('/onlynews', [FrontedController::class,'onlynews'])->name('onlynews'); 
    Route::get('/onlyinsight', [FrontedController::class,'onlyinsight'])->name('onlyinsight'); 
    Route::get('/news/details/{i}', [FrontedController::class,'newsDetails'])->name('newsDetails'); 
    Route::get('/contact', [FrontedController::class,'contact'])->name('contact'); 
    Route::post('/news/comments', [NewsController::class,'comment'])->name('news.comment'); 
});

//backend
Route::group(['prefix'=>'admin','as'=>'dashboard.','middleware'=>'auth'], function () {
//dashboard
Route::get('/', [HomeController::class,'index'])->name('index'); 
///////////////////////////////////////////////////////////////////////////////////////////////////////
// Home page
// Slider section
    Route::get('/home', [HomeController::class,'slides'])->name('slides'); 
    Route::get('/home/slide', [HomeController::class,'slides'])->name('slides'); 
    Route::get('/home/slide/add', [HomeController::class,'addslide'])->name('slide.add'); 
    Route::post('/home/slide/store', [HomeController::class,'storeslide'])->name('slide.store'); 
    Route::get('/home/slide/edit/{id}', [HomeController::class,'editslide'])->name('slide.edit'); 
    Route::post('/home/slide/update/', [HomeController::class,'updateslide'])->name('slide.update'); 
    Route::get('/home/slide/delete/{id}', [HomeController::class,'deleteslide'])->name('slide.delete');
// Services section
    Route::get('/home/services', [HomeController::class,'services'])->name('services.home');
    Route::post('/home/services/update/', [HomeController::class,'updateservices'])->name('services.home.update'); 
// About section
    Route::get('/home/about', [HomeController::class,'about'])->name('about');
    Route::post('/home/about/update/', [HomeController::class,'updateabout'])->name('about.update'); 
// Category section
    Route::get('/home/category', [HomeController::class,'category'])->name('category');
    Route::get('/home/category/add', [HomeController::class,'addcategory'])->name('category.add'); 
    Route::post('/home/category/store', [HomeController::class,'storecategory'])->name('category.store'); 
    Route::get('/home/category/edit/{id}', [HomeController::class,'editcategory'])->name('category.edit'); 
    Route::post('/home/category/update/', [HomeController::class,'updatecategory'])->name('category.update'); 
    Route::get('/home/category/delete/{id}', [HomeController::class,'deletecategory'])->name('category.delete');
//Images section
    Route::get('/home/images', [HomeController::class,'images'])->name('images.home');
    Route::get('/home/images/add', [HomeController::class,'addimages'])->name('images.home.add'); 
    Route::post('/home/images/store', [HomeController::class,'storeimages'])->name('images.home.store'); 
    Route::get('/home/images/edit/{id}', [HomeController::class,'editimages'])->name('images.home.edit'); 
    Route::post('/home/images/update/', [HomeController::class,'updateimages'])->name('images.home.update'); 
    Route::get('/home/images/delete/{id}', [HomeController::class,'deleteimages'])->name('images.home.delete');
//Project&news  section
    Route::get('/home/control', [HomeController::class,'control'])->name('control'); 
    Route::post('/home/control/update', [HomeController::class,'updatecontrol'])->name('control.update'); 
// Master page
    Route::get('/home/master', [HomeController::class,'masters'])->name('master'); 
    Route::Post('/home/master/updateHeader', [HomeController::class,'updateHeader'])->name('master.updateHeader'); 
    Route::get('/home/master/add', [HomeController::class,'addmaster'])->name('master.add'); 
    Route::post('/home/master/store', [HomeController::class,'storemaster'])->name('master.store'); 
    Route::get('/home/master/edit/{id}', [HomeController::class,'editmaster'])->name('master.edit'); 
    Route::post('/home/master/update/', [HomeController::class,'updatemaster'])->name('master.update'); 
    Route::get('/home/master/delete/{id}', [HomeController::class,'deletemaster'])->name('master.delete');
// Contact section
    Route::get('/home/contact', [HomeController::class,'contact'])->name('contact');
    Route::post('/home/contact/update/', [HomeController::class,'updatecontact'])->name('contact.update'); 
// Footer section
    Route::get('/home/footer', [HomeController::class,'footer'])->name('footer');
    Route::get('/home/footer/add', [HomeController::class,'addfooter'])->name('footer.add'); 
    Route::post('/home/footer/store', [HomeController::class,'storefooter'])->name('footer.store'); 
    Route::get('/home/footer/edit/{id}', [HomeController::class,'editfooter'])->name('footer.edit'); 
    Route::post('/home/footer/update/', [HomeController::class,'updatefooter'])->name('footer.update'); 
    Route::get('/home/footer/delete/{id}', [HomeController::class,'deletefooter'])->name('footer.delete');
    
///////////////////////////////////////////////////////////////////////////////////////////////////////
// About page
//main section
    Route::get('/about/main', [AboutController::class,'main'])->name('about.main'); 
    Route::post('/about/main/update', [AboutController::class,'updatemain'])->name('about.main.update'); 
//history section
    Route::get('/about/history', [AboutController::class,'history'])->name('about.history'); 
    Route::get('/about/history/add', [AboutController::class,'addhistory'])->name('about.history.add'); 
    Route::post('/about/history/store', [AboutController::class,'storehistory'])->name('about.history.store'); 
    Route::get('/about/history/edit/{id}', [AboutController::class,'edithistory'])->name('about.history.edit'); 
    Route::post('/about/history/update/', [AboutController::class,'updatehistory'])->name('about.history.update'); 
    Route::get('/about/history/delete/{id}', [AboutController::class,'deletehistory'])->name('about.history.delete'); 
//services section
    Route::get('/about/services', [AboutController::class,'services'])->name('about.services'); 
    Route::Post('/about/services/updateHeader', [AboutController::class,'updateheader'])->name('about.services.updateHeader'); 
    Route::get('/about/services/add', [AboutController::class,'add'])->name('about.services.add'); 
    Route::post('/about/services/store', [AboutController::class,'store'])->name('about.services.store'); 
    Route::get('/about/services/edit/{id}', [AboutController::class,'edit'])->name('about.services.edit'); 
    Route::post('/about/services/update/', [AboutController::class,'update'])->name('about.services.update'); 
    Route::get('/about/services/delete/{id}', [AboutController::class,'delete'])->name('about.services.delete');
//Images section
    Route::get('/about/images', [AboutController::class,'images'])->name('about.images'); 
    Route::post('/about/images/update', [AboutController::class,'updateimages'])->name('about.images.update'); 

///////////////////////////////////////////////////////////////////////////////////////////////////////
// services page
// main section
    Route::get('/services/main', [ServicesController::class,'main'])->name('services.main'); 
    Route::post('/services/main/update', [ServicesController::class,'updatemain'])->name('services.main.update'); 
////services section
    Route::get('/services', [ServicesController::class,'services'])->name('services'); 
    Route::get('/services/add', [ServicesController::class,'add'])->name('services.add'); 
    Route::post('/services/store', [ServicesController::class,'store'])->name('services.store'); 
    Route::get('/services/edit/{id}', [ServicesController::class,'edit'])->name('services.edit'); 
    Route::post('/services/update/', [ServicesController::class,'update'])->name('services.update'); 
    Route::get('/services/delete/{id}', [ServicesController::class,'delete'])->name('services.delete');
    
///////////////////////////////////////////////////////////////////////////////////////////////////////
// Project page
    Route::get('/projects', [ProjectsController::class,'projects'])->name('projects'); 
    Route::get('/projects/details', [ProjectsController::class,'details'])->name('projects.details'); 
    Route::get('/projects/add', [ProjectsController::class,'add'])->name('projects.add'); 
    Route::post('/projects/store', [ProjectsController::class,'store'])->name('projects.store'); 
    Route::get('/projects/edit/{id}', [ProjectsController::class,'edit'])->name('project.edit'); 
    Route::post('/projects/update/', [ProjectsController::class,'update'])->name('project.update'); 
    Route::get('/projects/delete/{id}', [ProjectsController::class,'delete'])->name('project.delete');

///////////////////////////////////////////////////////////////////////////////////////////////////////
// News page
    Route::get('/news', [NewsController::class,'news'])->name('news'); 
    Route::get('/news/details', [NewsController::class,'details'])->name('news.details'); 
    Route::get('/news/add', [NewsController::class,'add'])->name('news.add'); 
    Route::post('/news/store', [NewsController::class,'store'])->name('news.store'); 
    Route::get('/news/edit/{id}', [NewsController::class,'edit'])->name('news.edit'); 
    Route::post('/news/update/', [NewsController::class,'update'])->name('news.update'); 
    Route::get('/news/delete/{id}', [NewsController::class,'delete'])->name('news.delete');
//comments page
    Route::get('/news/allcomments', [NewsController::class,'allcomments'])->name('news.allcomments');
    Route::get('/news/allcomments/delete/{id}', [NewsController::class,'deletecomment'])->name('news.allcomments.delete');
    
///////////////////////////////////////////////////////////////////////////////////////////////////////
// Contact page
// Contact section
Route::get('/contact/contact', [ContactController::class,'contact'])->name('contact.contact.index');
Route::post('/contact/contact/update/', [ContactController::class,'updatecontact'])->name('contact.contact.update'); 
// message section
Route::post('/contact/message', [ContactController::class,'message'])->name('contact.contact.message');
Route::get('/contact/allmessage', [ContactController::class,'allmessage'])->name('contact.contact.allmessage');
Route::get('/contact/allmessage/delete/{id}', [ContactController::class,'delete'])->name('contact.contact.allmessage.delete');
});


//login 
Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
//logout
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');