<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/articles/{id}', function ($id) {
//     return "Article Page with ID $id";
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-1: ".$commentId;
//     });

// Route::get('/user/{name?}', function ($name='Rizqi') { return 'My name is '.$name;
// });
   
// Route::get('/user/{Rizqi?}', function ($name='Rizqi') 
// { 
//     return 'Nama saya '.$name;
// });
Route::get('/hello', [\App\Http\Controllers\WelcomeController::class, 'hello']);

// Route::get('/', [PageController::class, 'index']); // Menampilkan 'Welcome'
// Route::get('/about', [PageController::class, 'about']); // Menampilkan Nama dan NIM
// Route::get('/articles/{id}', [PageController::class, 'articles']); // Menampilkan Artikel dengan ID

Route::get('/', [HomeController::class, 'index']); // Menampilkan "Welcome"
Route::get('/about', [AboutController::class, 'show']); // Menampilkan Nama & NIM
Route::get('/articles/{id}', [ArticleController::class, 'show']); // Menampilkan Artikel berdasarkan ID

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);




?>