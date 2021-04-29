<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\ForumCategoryController;
use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
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
    
    Route::get('/games',[GameController::class,'index'])->name('admin.games');
    Route::get('/games/create',[GameController::class,'create'])->name('admin.game.create');
    Route::post('/games/store',[GameController::class,'store'])->name('admin.game.store');
    Route::get('/games/edit/{id}',[GameController::class,'edit'])->name('admin.game.edit');
    Route::patch('/games/update/{id}',[GameController::class,'update'])->name('admin.game.update');
    Route::delete('/games/delete/{id}',[GameController::class,'destroy'])->name('admin.game.delete');

    Route::get('/forum_categories',[ForumCategoryController::class,'index'])->name('admin.forum_categories');
    Route::get('/forum_categories/create',[ForumCategoryController::class,'create'])->name('admin.forum_category.create');
    Route::post('/forum_categories/store',[ForumCategoryController::class,'store'])->name('admin.forum_category.store');
    Route::get('/forum_categories/edit/{id}',[ForumCategoryController::class,'edit'])->name('admin.forum_category.edit');
    Route::patch('/forum_categories/update/{id}',[ForumCategoryController::class,'update'])->name('admin.forum_category.update');
    Route::delete('/forum_categories/delete/{id}',[ForumCategoryController::class,'destroy'])->name('admin.forum_category.delete');

    Route::get('/forums',[ForumController::class,'index'])->name('admin.forums');
    Route::get('/forums/create',[ForumController::class,'create'])->name('admin.forum.create');
    Route::post('/forums/store',[ForumController::class,'store'])->name('admin.forum.store');
    Route::get('/forums/edit/{id}',[ForumController::class,'edit'])->name('admin.forum.edit');
    Route::patch('/forums/update/{id}',[ForumController::class,'update'])->name('admin.forum.update');
    Route::delete('/forums/delete/{id}',[ForumController::class,'destroy'])->name('admin.forum.delete');

    Route::get('/blogs',[BlogController::class,'index'])->name('admin.blogs');
    Route::get('/blogs/create',[BlogController::class,'create'])->name('admin.blog.create');
    Route::post('/blogs/store',[BlogController::class,'store'])->name('admin.blog.store');
    Route::get('/blogs/edit/{id}',[BlogController::class,'edit'])->name('admin.blog.edit');
    Route::patch('/blogs/update/{id}',[BlogController::class,'update'])->name('admin.blog.update');
    Route::delete('/blogs/delete/{id}',[BlogController::class,'destroy'])->name('admin.blog.delete');

    Route::get('/permissions',[PermissionController::class,'index'])->name('admin.permissions');
    Route::get('/permissions/create',[PermissionController::class,'create'])->name('admin.permission.create');
    Route::post('/permissions/store',[PermissionController::class,'store'])->name('admin.permission.store');
    Route::get('/permissions/edit/{id}',[PermissionController::class,'edit'])->name('admin.permission.edit');
    Route::patch('/permissions/update/{id}',[PermissionController::class,'update'])->name('admin.permission.update');
    Route::delete('/permissions/delete/{id}',[PermissionController::class,'destroy'])->name('admin.permission.delete');

    Route::get('/roles',[RoleController::class,'index'])->name('admin.roles');
    Route::get('/roles/create',[RoleController::class,'create'])->name('admin.role.create');
    Route::post('/roles/store',[RoleController::class,'store'])->name('admin.role.store');
    Route::get('/roles/edit/{id}',[RoleController::class,'edit'])->name('admin.role.edit');
    Route::patch('/roles/update/{id}',[RoleController::class,'update'])->name('admin.role.update');
    Route::delete('/roles/delete/{id}',[RoleController::class,'destroy'])->name('admin.role.delete');

    Route::get('/users',[UserController::class,'index'])->name('admin.users');
    Route::get('/users/create',[UserController::class,'create'])->name('admin.user.create');
    Route::post('/users/store',[UserController::class,'store'])->name('admin.user.store');
    Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('admin.user.edit');
    Route::patch('/users/update/{id}',[UserController::class,'update'])->name('admin.user.update');
    Route::delete('/users/delete/{id}',[UserController::class,'destroy'])->name('admin.user.delete');
});

Route::group(['prefix'=>'/user','middleware'=>['auth','role:user']],function()
{
    Route::get('/dashboard',[UserHomeController::class,'index'])->name('user.home');
});

Route::get('*',function()
{
    return redirect()->route('index');
});



