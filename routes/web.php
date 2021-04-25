<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\FrontendController;

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
//     return view('welcome');
// });

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/browse_tournaments',[FrontendController::class,'browse_tournaments'])->name('browse_tournaments');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/contact_us',[FrontendController::class,'contact_us'])->name('contact_us');
Route::get('/forums',[FrontendController::class,'forums'])->name('forums');

Auth::routes();
Route::get('login',function()
{
    return redirect()->route('index');
})->name('login');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/{provider}', [LoginController::class, 'redirectToProvider'])->name('login.socials');
Route::get('login/{provider}/callback', [LoginController::class, 'handleProviderCallback']);

Route::group(['prefix'=>'/admin','middleware'=>['auth','role:admin']],function()
{
    Route::get('/dashboard',[HomeController::class,'index'])->name('admin.home');
});

Route::group(['prefix'=>'/user','middleware'=>['auth','role:user']],function()
{
    Route::get('/dashboard',[UserHomeController::class,'index'])->name('user.home');
});

Route::get('*',function()
{
    return redirect()->route('index');
});



