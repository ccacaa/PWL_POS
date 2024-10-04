<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\penjualan_detailController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanDetailController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use Resouces\Views\hello;
use Resouces\Views\blog;

Route::get('/', [WelcomeController::class, 'index']);
//js5 prak 3 (3 )
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']); // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']); // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']); // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']); // menyimpan data user baru
    Route::get('/create_ajax', [UserController::class, 'create_ajax']); // menampilkan halaman form tambah user ajax
    Route::post('/ajax', [UserController::class, 'store_ajax']); // menyimpan data user baru ajax
    Route::get('/{id}', [UserController::class, 'show']); // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']); // menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']); // menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
});
Route::group(['prefix' => 'level/'], function() {
    Route::get('/', [LevelController::class, 'index']);
    Route::post('/list', [LevelController::class, 'list']);
    Route::get('/create', [LevelController::class, 'create']);
    Route::post('/', [LevelController::class, 'store']);
    Route::get('/{id}', [LevelController::class, 'show']);
    Route::get('/{id}/edit', [LevelController::class, 'edit']);
    Route::put('/{id}', [LevelController::class, 'update']);
    Route::delete('/{id}', [LevelController::class, 'destroy']);
});

Route::group(['prefix' => 'kategori/'], function() {
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/list', [KategoriController::class, 'list']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::get('/{id}', [KategoriController::class, 'show']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});

Route::group(['prefix' => 'barang/'], function() {
    Route::get('/', [BarangController::class, 'index']);
    Route::post('/list', [BarangController::class, 'list']);
    Route::get('/create', [BarangController::class, 'create']);
    Route::post('/', [BarangController::class, 'store']);
    Route::get('/{id}', [BarangController::class, 'show']);
    Route::get('/{id}/edit', [BarangController::class, 'edit']);
    Route::put('/{id}', [BarangController::class, 'update']);
    Route::delete('/{id}', [BarangController::class, 'destroy']);
});

Route::group(['prefix' => 'supplier/'], function() {
    Route::get('/', [SupplierController::class, 'index']);
    Route::post('/list', [SupplierController::class, 'list']);
    Route::get('/create', [SupplierController::class, 'create']);
    Route::post('/', [SupplierController::class, 'store']);
    Route::get('/{id}', [SupplierController::class, 'show']);
    Route::get('/{id}/edit', [SupplierController::class, 'edit']);
    Route::put('/{id}', [SupplierController::class, 'update']);
    Route::delete('/{id}', [SupplierController::class, 'destroy']);
});


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
?>