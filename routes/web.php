<?php

use App\Http\Controllers\AuthManager;
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
Route::get('/userhome','userhomeGet')->name('userhome.get');

});
// Route By Post
Route::controller(AuthManager::class)->group(function () {
    Route::post('/', 'homePost')->name('home.post');
    Route::post('/register','registerPost')->name('register.post');
Route::get('/logout','logoutPost')->middleware('auth')->name('logout.post');
Route::post('/registerform','registerformPost')->name('registerform.post');
Route::post('/login','loginPost')->name('login.post');
});

// Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function(){
    Route::get('/home',[RouteManager::class,'userhomeGet'])->name('home.get');
});
// Admin Route List
Route::middleware(['auth', 'user-access:admin'])->group(function (){
    Route::get('/admin/home',[RouteManager::class,'adminhomeGet'])->name('adminhome.get');
});
// // Manager Route List
// Route::middleware(['auth','user-acces:manager'])->group(function(){
//     Route::get('/manager/home',[RouteManager::class,'managerhomeGet'])->name('managerhome.get');
// });