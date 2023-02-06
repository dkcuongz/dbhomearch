<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\IntroduceController;
use App\Http\Controllers\FrontEnd\InteriorController;
use App\Http\Controllers\FrontEnd\ProjectController;
use App\Http\Controllers\FrontEnd\BlogController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\MainContentController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\IntroduceController as AdminIntroduceController;
use CKSource\CKFinderBridge\Controller\CKFinderController;

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


Auth::routes();
Route::any('/ckfinder/connector', [CKFinderController::class, 'requestAction'])
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', [CKFinderController::class, 'browserAction'])
    ->name('ckfinder_browser');

Route::any('/ckfinder/examples/{example?}', [CKFinderController::class, 'examplesAction'])
    ->name('ckfinder_examples');


//front routes
Route::group([
    'as' => 'front.',
], function () {

    Route::get('/', [HomeController::class, 'index'])
        ->name('home');

    Route::get('/search', [HomeController::class, 'search'])
        ->name('search.project');

    Route::get('/trang-chu', [HomeController::class, 'index'])
        ->name('trang-chu');

    Route::get('/gioi-thieu', [IntroduceController::class, 'index'])
        ->name('gioi-thieu');

    Route::get('/gioi-thieu/{slug}', [IntroduceController::class, 'show'])
        ->name('gioi-thieu.child');

    Route::get('/thiet-ke-noi-that', [InteriorController::class, 'index'])
        ->name('thiet-ke-noi-that');

    Route::get('/thiet-ke-noi-that/{slug}', [InteriorController::class, 'byCategory'])
        ->name('thiet-ke-noi-that.child');

    Route::get('/thiet-ke-noi-that/{slug}/{id}', [InteriorController::class, 'show'])
        ->name('thiet-ke-noi-that.detail');

    Route::get('/du-an', [ProjectController::class, 'index'])
        ->name('du-an');

    Route::get('/du-an/{id}', [ProjectController::class, 'detail'])
        ->name('du-an.detail');

    Route::get('/tin-tuc-blog', [BlogController::class, 'index'])
        ->name('tin-tuc-blog');

    Route::get('/tin-tuc-blog/{slug}', [BlogController::class, 'byCategory'])
        ->name('tin-tuc-blog.child');

    Route::get('/tin-tuc-blog/{slug}/{id}', [BlogController::class, 'show'])
        ->name('tin-tuc-blog.detail');

    Route::get('/lien-he', [ContactController::class, 'index'])
        ->name('lien-he');

    Route::post('/lien-he', [ContactController::class, 'store'])
        ->name('lien-he.store');
});

//admin routes
Route::group([
    'as' => 'admin.',
    'middleware' => ['admin', 'auth'],
    'prefix' => 'admin',
], function () {
    Route::get('/home', [AdminHomeController::class, 'index'])
        ->name('home');
    Route::resource('users', UsersController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('posts', PostsController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('main-contents', MainContentController::class);
    Route::resource('introduce', AdminIntroduceController::class);
    Route::resource('contacts', ContactsController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
