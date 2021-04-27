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
})->middleware('auth');
Route::get('/', function () {
     return redirect('/home');
 });


Route::get('/home', [HomeController::class, 'Index']);
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::resource('/blog', BlogController::class)->middleware('auth');
Route::resource('/contact', ContactController::class);
Route::resource('/career', CareerController::class)->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route to process the form
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'doLogin']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'doLogout']);


Route::get('/pageBlog', [App\Http\Controllers\HomeController::class, 'pageBlog']);
Route::get('/pageCareer', [App\Http\Controllers\HomeController::class, 'pageCareer']);
Route::get('/pageFaq', [App\Http\Controllers\HomeController::class, 'pageFaq']);
Route::get('/companyProfile', [App\Http\Controllers\HomeController::class, 'companyProfile']);
Route::get('/pageBlogDetails/{id}', [App\Http\Controllers\HomeController::class, 'pageBlogDetails']);