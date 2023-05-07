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
Route::get("/freeze-user", [HomeController::class, 'freezeUsers'])->name('freezeUser');
Route::middleware('auth.admin')->get("/admin", [AdminController::class, 'index'])->name('admin');
Route::middleware('auth.admin')->get("/user-list", [AdminController::class, 'userList'])->name('userlist');
Route::middleware('auth.admin')->get("/urun-yönetim", [AdminController::class, 'urunYönetim'])->name('urunyönetim');
Route::middleware('auth.admin')->get('/comments', [AdminController::class, 'getComments'])->name("getComment");
Route::middleware('auth.admin')->post('/update-product', [AdminController::class, 'updateProduct'])->name("updateProducts");
Route::middleware('auth.admin')->get('/product-updates', [AdminController::class, 'productUpdate'])->name("productStok");
Route::middleware('auth.admin')->get('/okComment', [AdminController::class, 'okComments'])->name("okComment");
Route::middleware('auth.admin')->get('/deleteComment', [AdminController::class, 'deleteComment'])->name("deleteComment");
Route::middleware('auth.admin')->get("/urun-stok", [AdminController::class, 'urunStok'])->name('urunstok');
Route::middleware('auth.admin')->get("/satis-cek", [AdminController::class, 'satistanCek'])->name('satiscek');
Route::middleware('auth.admin')->post("/freezeuser", [AdminController::class, 'freezeUser'])->name('freeze');
Route::middleware('auth.admin')->get("/setFieche", [AdminController::class, 'setFieche'])->name('setFieches');
Route::middleware('auth.admin')->get("/add-banner", [AdminController::class, 'getBanner'])->name('addBanners');
Route::middleware('auth.admin')->get("/delete-banner", [AdminController::class, 'deleteBanner'])->name('deleteBanner');
Route::middleware('auth.admin')->post("/set-banner", [AdminController::class, 'addBanner'])->name('setBanners');
Route::middleware('auth')->post("/post-content", [HomeController::class, 'setComment'])->name('setComment');
Route::middleware('auth')->post("/freeze-users", [HomeController::class, 'freezeUser'])->name('freezeUser');
Route::middleware('auth')->post("/add-adress", [HomeController::class, 'addAdress'])->name('addAdress');
Route::middleware('auth')->get("/current-adress", [HomeController::class, 'setCurrentAdress'])->name('currentAdress');
Route::middleware('auth')->get("/set-adress", [HomeController::class, 'setAdress'])->name('setAdress');
Route::middleware('auth')->get("/payments", [HomeController::class, 'setFieche'])->name('setFieche');
Route::middleware('auth')->get("/profile", [HomeController::class, 'getUserAdress'])->name('useradress');
Route::middleware('auth')->get("/profil-details", [HomeController::class, 'getUserProfile'])->name('profileDetails');
Route::middleware('auth')->get("/hesap-ac", [HomeController::class, 'hesapAc'])->name('hesapac');
Route::middleware('auth')->get("/track", [HomeController::class, 'getShopTrack'])->name('shopTrack');
Route::middleware('auth')->get("/create-payments", [HomeController::class, 'createPayment'])->name('createShop');
Route::middleware('auth.admin')->post("/freezebreakuser", [AdminController::class, 'freezeBreakUser'])->name('freezebreak');
Route::middleware('auth.admin')->post("/addproduct", [AdminController::class, 'addProduct'])->name('addproduct');
Route::middleware('auth.admin')->post("/addowner", [AdminController::class, 'addOwner'])->name('addowner');
Route::middleware('auth.admin')->post("/addcategory", [AdminController::class, 'addCategory'])->name('addcategory');
