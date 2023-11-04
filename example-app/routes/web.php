<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
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

//Bắt buộc đăng nhập
Route::middleware('auth')->group(function () {
    Route::resource('/products',ProductController::class)->except(['index','show']);
    Route::post('logout',[LoginController::class,'logout'])->name('logout');
    //bắt buộc đăng nhập tài khoản admmin
    Route::prefix('admin')->middleware('can:isAdmin')->group(function(){
        Route::get('dashboard',function(){
            return view('admin.dashboard');
        })->name('dashboard');
    });

});
//không bắt buộc
Route::get('/login',[LoginController::class,'showForm'])->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->name('login');
Route::resource('/products',ProductController::class)->only(['index','show']);

Route::get('/', function () {
    //return view('welcome');
    return view('home');
});
//buoc 1 tao model
//buoc 2 them cac cot vaof migration
//buoc 3 them mot migration tao khoa ngoai
//buoc 4 chay migration
//buoc 5 chinh sua code cua cac model, them quan he
//buoc 6 Them du lieu mau neu co trong sender
// va goi cac seeder trong databaseSeeder.php
//sau do chay cac seeder
//Buoc7 chay leh sau
//php artisan storage:link
//de tao lien ket tu foder public toi folder storage
//Buoc 8 tao cac View route va viet code trong controller
//8.1: index
//8.2 show + hinh default
//8.3 creat + store
//8.4 edit +update
//8.5 destroy


//Daang nhập đăng xuất
//bước 1 sửa file Migration + seeder
//buoc 2 chayj laij Migration + seeder
//buoc 3 tao view ddang nhap
//buoc 4 tao route + controller
//buoc 5 sua view layout
//buoc 6 phân quyền cho khách va người dùng đăng nhập
//bước 7 phân quyền cho admin

//Đăng nhập đăng xuất API
//Bước 1: Tạo route + controller (docs)