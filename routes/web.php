<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
//     // trả về view resources/views/welcome.blade.php
//     return view('welcome');
// });

// Route::get('/users', function (Request $request){
//     // dd($request->all());//var_dump($request); die();
//     $requestData = $request->all();
//     $title = 'Danh sách người dùng';
//     $user = [
//         [
//             'id' => 1,
//             'name' => 'vũ công tuyền',
//             'address' => 'hà nội',
//             'age' => 20,
//             'status' => 1

//         ],
//         [
//             'id' => 2,
//             'name' => 'phùng quang việt',
//             'address' => ' hà nội',
//             'age' => 20,
//             'status' => 0

//         ]
        
//     ];
//     return view('users',[
//         'view_title' => $title,
//         'user_list' => $user
//     ]);

// });

// Route::get('/users/{id}/{name}', function($userId,$username){ 
//     //vị trí của tham số phải khớp với vị trí biến trong Url, không nhất thiết phải đặt tên giống
//     dd($userId,$username);
// });

// Route::get('/register', function(){
//     return view('register');
// });
// Route::get('/register-success', function(Request $request){
//     $requestData = $request->all();
//     return view('register-success',$requestData);
// })->name('regis-success');
// Route::get('/product', function(){
//     return view('product/list');
// });
// Route::get('/product-add', function(){
//     return view('product/add');
// });
Route::get('/client', function(){
    return view('client/home');
});

Route::prefix('/users')->name('users.')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('list');
    Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
});

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('list');
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::post('store', [ProductController::class, 'store'])->name('store');
    Route::get('status/{id}', [ProductController::class, 'status'])->name('status');
    Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('delete');
});




Route::prefix('')->name('client.')->group(function () {
    Route::get('', [ClientController::class, 'home'])->name('home');

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('list', [ClientController::class, 'productList'])->name('list');
        Route::get('detail', [ClientController::class, 'productDetail'])->name('detail');
    });

    Route::get('cart', [ClientController::class, 'cart'])->name('cart');
    Route::get('checkout', [ClientController::class, 'checkout'])->name('checkout');
    Route::get('contact', [ClientController::class, 'contact'])->name('contact');

    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::get('signup', [LoginController::class, 'signup'])->name('signup');
});




