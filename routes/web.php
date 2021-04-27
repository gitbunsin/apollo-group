<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/admin/dashboard', function () {
     return view('pages.content');
});
// Route::get('/', function () {
//     return view('front.layout.main');
// });
Route::get('/dashboard', [HomeController::class, 'Dashboard2']);
Route::get('/home', [HomeController::class, 'Index']);
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::resource('/blog', BlogController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/career', CareerController::class);
Route::resource('/user', UserController::class);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route to process the form
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'doLogin']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'doLogout']);
Route::get('/pageBlog', [App\Http\Controllers\HomeController::class, 'pageBlog']);
Route::get('/pageCareer', [App\Http\Controllers\HomeController::class, 'pageCareer']);