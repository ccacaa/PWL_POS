<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use Resouces\Views\hello;
use Resouces\Views\blog;


//Prak 1

// Route::get('/hello', function () {
//     return 'Hello World';
// }); (2)

// Route::get('/world', function () {
//     return "World";
// }); (4)

// Route::get('/ucapan', function () {
//     return "Selamat Datang";
// }); (6)

// Route::get('/about', function () {
//     return 
//     "Nama: Carieska Berliana Novita Kusuma Wardani<br>
//      NIM  : 2241760027";
// }); (7)

// Route::get('/user/{Carieska}', function ($Carieska) {
//     return 'Nama saya '.$Carieska;
//     }); (8)

// Route::get('/posts/{post}/comments/{comment}', function 
// ($postId, $commentId) {
//  return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// }); (11)

// Route::get('/article/{id}', function ($id){
//     return 'Artikel dengan ID: '.$id;
// }); (13)

//(14)
// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama Saya '.$name;
// }); 

//(17)
// Route::get('/user/{name?}', function ($name='Caca') {
//     return 'Nama saya '.$name;
//     });

// (prak 2)
//(3)
// Route::get('/hello', [WelcomeController::class,'hello']);

//(6)
// Route::get('/', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);

//(7)
// Route::get('/', [HomeController::class,'index']);
// Route::get('/about', [AboutController::class,'about']);
// Route::get('/articles/{id}', [ArticleController::class,'articles']);

// Route::resource('photos', PhotoController::class);

//(11)
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//    ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
//    ]);

//praktikum 3

//(2)
//    Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Caca']);
//     });

//(6)
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Caca']);
//     });

//(9)
// Route::get('/greeting', [WelcomeController::class, 'greeting']);

//Praktikum4 js 3

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class,'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class,'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class,'hapus']);
Route::get('/', [WelcomeController::class, 'index']);
?>