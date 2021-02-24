<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfielController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\GradeController;

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

// Route::get('/posts/{post}',  function($post){
//     $posts = [
//         'my-first-post' => 'Hello, this is my first blog post!',
//         'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//     ];

//     if (!array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found.');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/',[WelcomeController::class, 'show']);

Route::get('/profiel', [ProfielController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/profession', [ProfessionController::class, 'show']);

Route::resource('/grades', GradeController::class);

Route::resource('/articles', ArticlesController::class);
//
//Route::get('/articles/create', [ArticlesController::class, 'create']);
//Route::post('/articles', [ArticlesController::class, 'store']);
//Route::get('/articles/{article}', [ArticlesController::class, 'show']);
//Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
//Route::put('/articles/{article}', [ArticlesController::class, 'update']);
//Route::delete('/articles/{article}', [ArticlesController::class, 'destroy']);
//Route::get('/articles', [ArticlesController::class, 'index']);

Route::get('/motivation', [MotivationController::class, 'show']);

Route::resource('/faq', FaqController::class);
//Route::get('/faq', [FaqController::class, 'index']);
//Route::post('/faq', [FaqController::class, 'store']);
//Route::get('/faq/create', [FaqController::class, 'create']);
//Route::get('/faq/{faq}', [FaqController::class, 'show']);
//Route::get('/faq/{faq}/edit', [FaqController::class, 'edit']);
//Route::put('/faq/{faq}', [FaqController::class, 'update']);
//Route::delete('/faq/{faq}', [FaqController::class, 'destroy']);

