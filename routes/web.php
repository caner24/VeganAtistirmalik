<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;;

use App\Http\Controllers\AdminController;;

use App\Http\Controllers\SessionController;;
Route::get('/', [HomeController::class, 'index'])->name("index");
Route::get('/hakkimizda', [HomeController::class, 'about'])->name("about");


Route::get('/register', [RegisterController::class, 'getRegister'])->name("register");
Route::post('/register', [RegisterController::class, 'postRegister'])->name("postRegister");

Route::get('/login', [SessionController::class, 'create'])->name("login");
Route::post('/login', [SessionController::class, 'store'])->name("postLogin");
Route::post('/add-cart', [HomeController::class, 'setCart'])->name("addcart");
Route::post('/delete-cart', [HomeController::class, 'deleteCart'])->name("cartRemove");
Route::get('/logout', [SessionController::class, 'destroy'])->name("logout");



Route::get('/seedData', function () {
    return view('HelloAnalytics');
});

Route::get('/retdata', function () {
    return view('Admin.retrewing');
});

Route::get('/cart', [HomeController::class, 'getCart'])->name("showCart");
Route::get('/shop', [HomeController::class, 'getProduct'])->name("urungetir");
Route::get('/product-detail', [HomeController::class, 'productDetail'])->name("urundetay");
Route::middleware('auth')->get("/admin", [AdminController::class, 'index'])->name('admin');
Route::middleware('auth')->get("/user-list", [AdminController::class, 'userList'])->name('userlist');
Route::middleware('auth')->get("/urun-yönetim", [AdminController::class, 'urunYönetim'])->name('urunyönetim');
Route::middleware('auth')->get("/urun-stok", [AdminController::class, 'urunStok'])->name('urunstok');
Route::middleware('auth')->post("/freezeuser", [AdminController::class, 'freezeUser'])->name('freeze');
Route::middleware('auth')->post("/freezebreakuser", [AdminController::class, 'freezeBreakUser'])->name('freezebreak');
Route::middleware('auth')->post("/addproduct", [AdminController::class, 'addProduct'])->name('addproduct');
Route::middleware('auth')->post("/addowner", [AdminController::class, 'addOwner'])->name('addowner');
Route::middleware('auth')->post("/addcategory", [AdminController::class, 'addCategory'])->name('addcategory');
