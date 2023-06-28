<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', [MainController::class, 'home']);

Route::get('/about', function(){
    return view('about');
});

Route::get('/services', function(){
    return view('services');
});

Route::any('/contact', function(){
    return view('contact');
});

Route::get('/resources', [MainController::class, 'resources']);

Route::get('/blog/new/upload',[BlogController::class, 'upload'])->middleware('auth');

Route::get('/blog/{id}',[BlogController::class, 'index']);

Route::get('/blog/edit/{id}',[BlogController::class, 'edit'])->middleware('auth');

Route::post('/blog/save/{id}',[BlogController::class, 'save'])->middleware('auth');

Route::get('/blog/delete/{id}',[BlogController::class, 'destroy'])->middleware('auth');

Route::get('/service/{id}', [PageController::class, 'service']);

Route::get('/survey/{rv?}',[PageController::class,'survey']);

Route::post('/survey/save',[FormController::class, 'survey']);

Route::get('/complete/survey',[FormController::class,'complete']);

Route::get('rv/sign-up',[UserController::class, 'signup']);

Route::post('rv/create', [UserController::class, 'create']);

Route::get('rv/dashboard',[UserController::class, 'index']);

Route::get('rv/login',[UserController::class, 'login']);

Route::post('/rv/authenticate',[UserController::class, 'authenticate']);

Route::get('get/sessions',[UserController::class, 'sessions']);

Route::get('/rv/logout',[UserController::class,'logout']);

Route::post('/blog/new/create',[BlogController::class,'create'])->middleware('auth');

require __DIR__.'/auth.php';
