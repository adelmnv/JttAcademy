<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{HomeController, PostController, CoachController, PlayerController, PracticeController};
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
    //return 'Hello Laravel';
    return view('welcome');
});

Route::get('/hello/{name?}',[HomeController::class,'sayHello']);
Route::get('/',[HomeController::class,'index'])->name('main');
Route::get('/gallery',[HomeController::class,'gallery']);
Route::get('/tournaments',[HomeController::class,'tournaments']);
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact']);


Route::get('/login' ,[HomeController::class,'user_login'])->name('user.login');
Route::post('/login' ,[HomeController::class,'user_auth'])->name('user.auth');
Route::get('/logout' ,[HomeController::class,'user_logout'])->name('user.logout');


Route::get('/check', [HomeController::class,'sayHello'])->middleware('auth');

Route::get('/admin',[HomeController::class,'admin_dash'])->name('admin.dash');

Route::get('/posts',[PostController::class,'posts'])->name('posts');
Route::get('/posts/{post_id?}/view/',[PostController::class,'view'])->name('posts.view')->where('post_id','[0-9]+');
Route::get('/posts/create/',[PostController::class,'create'])->name('posts.create');
Route::get('/posts/{post_id?}/edit/',[PostController::class,'edit'])->name('posts.edit');
Route::post('/posts/{post_id?}/edit/',[PostController::class,'update'])->name('posts.update');
Route::post('/posts/create/',[PostController::class,'store'])->name('posts.store');

Route::post('/posts/{post_id?}/attach_tag/',[PostController::class,'attach_tag'])->name('posts.attach_tag');
Route::post('/posts/{post_id?}/detach_tag/',[PostController::class,'detach_tag'])->name('posts.detach_tag');
Route::get('/posts/category/by_category/{category_id?}',[PostController::class,'posts_by_category'])->name('posts.by_category');

Route::get('/coaches',[CoachController::class,'coaches'])->name('coaches');
Route::get('/coaches/{coach_id?}/view/',[CoachController::class,'view'])->name('coaches.view')->where('coach_id','[0-9]+');

Route::get('/players',[PlayerController::class,'players'])->name('players');

Route::get('/practices', [PracticeController::class,'practices'])->name('practices');
Route::get('/practices/type/by_type/{type_id?}',[PracticeController::class,'practices_by_type'])->name('practices.by_type');
Route::get('/practices/{practice_id?}/type/{type_id?}/create_application/',[PracticeController::class,'create_application'])->name('practices.create_application');
Route::post('/practices/{practice_id?}/type/{type_id?}/store_application/',[PracticeController::class,'store_application'])->name('practices.store_application');

