<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleCOntroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'index']);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Nurul']);
// });

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);

// Route::get('/', function () {
//     return 'Selamat Datang';
// });
// Route::get('/user/profile', function () {
//     //
// })->name('profile');

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/about', function () {
//     return 'NIM Saya 2241720022 dan Nama saya Muhammad Nurul Mustofa';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya ' . $name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID' . $id;
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya ' . $name;
// });

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });

//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::redirect('/here', '/there');
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/hello', [WelcomeController::class, 'hello']);
