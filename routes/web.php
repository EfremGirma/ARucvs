<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\AccessoriesManager;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteManager;
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
// Route By Get
Route::controller(RouteManager::class)->group(function () {
    Route::get('/', 'homeGet')->name('home.get');
Route::get('/register', 'registerGet')->name('register.get');
Route::get('/registerform', 'registerformGet')->name('registerform.get');
Route::get('/login', 'loginGet')->name('login');
Route::get('/aboutus',  'aboutGet')->name('aboutus.get');
Route::get('/verifycv','verifycvGet')->name('verifycv.get');
Route::get('/contactus', 'contactusGet')->name('contactus.get');
// Route::get('/userhome','userhomeGet')->name('userhome.get');
Route::get('/adminhome', 'adminhomeGet')->name('adminhome.get');

});
Route::controller(AccessoriesManager::class)->group(function () {
Route::get('/contactus', 'contactusGet')->name('contactus.get');
Route::get('/aboutus',  'aboutGet')->name('aboutus.get');
Route::get('/managerprofile','managerprofileGet')->name('managerprofile.get');
    Route::get('/adminprofile','adminprofileGet')->name('adminprofile.get');
    Route::get('/userprofile','userprofileGet')->name('userprofile.get');
});
// Route By Post
Route::controller(AuthManager::class)->group(function () {
    Route::post('/', 'homePost')->name('home.post');
    Route::post('/register','registerPost')->name('register.post');
Route::get('logout','logoutPost')->middleware('auth')->name('logout.post');
Route::post('/registerform','registerformPost')->name('registerform.post');
Route::post('/login','loginPost')->name('login.post');
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/home',  'index')->name('home');
});

// Manager Route List
Route::middleware(['auth','user-access:Manager'])->group(function(){
    Route::get('/manager/home',[HomeController::class,'managerhomeGet'])->name('managerhome.get');
});
// Admin Route List
Route::middleware(['auth', 'user-access:Admin'])->group(function (){
    Route::get('/admin/home',[HomeController::class,'adminhomeGet'])->name('adminhome.get');
});

// Normal Users Routes List
Route::middleware(['auth', 'user-access:User'])->group(function(){
    Route::get('/user/home',[HomeController::class,'userhomeGet'])->name('userhome.get');
});


