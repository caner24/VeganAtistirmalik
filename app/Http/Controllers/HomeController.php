<?php

namespace App\Http\Controllers;

use Google\Service\Fitness\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        return view("Home.index", ['cartCount' => $count]);
    }
    public function getUserAdress(Request $request)
    {
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        $userAdress = DB::table("useradress")->where("User_id", auth()->user()->id)->get();
        return view("Home.useradress", ['userAdress' => $userAdress, 'cartCount' => $count]);
    }
    public function createPayment(Request $request)
    {
        $totalPrice = 0;
        $durum = false;
        $productTotal = 0;
        if ($request->session()->get('Count')) {
            $durum = true;
            $count = $request->session()->get('Count');
            $productCount = $request->session()->get('productCount');
            $productArr = array();
            $total = 0;
            $productDetArr = array();
            $imageArr = array();
            $imagePathArr = array();
            $PathArr = array();
            $detArr = array();
            foreach ($request->session()->get('ProductId') as $key => $value) {
                $products = DB::table("products")->whereId($value)->get();
                $productdet =  DB::table("productdetail")->where("ProductId", $value)->get();
                $image =  DB::table("productimages")->where("ProductId", $value)->get();
                array_push($productArr, $products);
                array_push($productDetArr, $productdet);
                array_push($imageArr, $image);
            }
            foreach ($imageArr as $key => $value) {
                $imagePath =  DB::table("images")->where("id", $value[0]->PhotoId)->get();
                array_push($imagePathArr, $imagePath);
            }
            foreach ($imagePathArr as $key => $value) {
                array_push($PathArr, $value[0]->Path);
            }
            foreach ($productDetArr as $key => $value) {
                $total +=  $productCount[$key] * $value[0]->UnitPrice;
                array_push($detArr, $value[0]->UnitPrice);
            }
            $userAdress = DB::table("useradress")->where("User_id", auth()->user()->id)->get("id")->count() >= 2 ? DB::table("useradress")->where("User_id", auth()->user()->id)->where("isDefault", 1)->get() : DB::table("useradress")->where("User_id", auth()->user()->id)->get();
            return view("Home.createPayments", ['userAdress' => $userAdress, 'total' => $total, '$productTotal' => $productTotal, 'productCount' => $productCount, 'totalPrice' => $totalPrice, 'cartCount' => $count, 'durumBilgisi' => $durum, 'productList' => $productArr, 'productDetList' => $detArr, 'photoPathList' => $PathArr]);
        } else {
            $count = 0;
            $userAdress = DB::table("useradress")->where("User_id", auth()->user()->id)->get();
            $productCount = $request->session()->get('productCount');
            return view("Home.createPayments", ['userAdress' => $userAdress, '$productTotal' => $productTotal, 'productCount' => $productCount, 'totalPrice' => $totalPrice, 'cartCount' => $count, 'durumBilgisi' => $durum]);
        }
    }
    public function getUserProfile(Request $request)
    {


        return view("Home.profile");
    }
    public function getShopTrack(Request $request)
    {
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        $products = array();
        $images = array();
        $fieches = DB::table("fieche")->where("UserId", auth()->user()->id)->get();
        foreach ($fieches as $key => $value) {
            $productId = DB::table("productdetail")->where("id", $value->ProductDetId)->get();
            $photoId = DB::table("productimages")->where("ProductId", $productId[0]->ProductId)->get();
            $products[$key] = DB::table("products")->where("id", $productId[0]->ProductId)->get();
            $images[$key] = DB::table("images")->where("id", $photoId[0]->PhotoId)->get();
        }
        return view("Home.userorders", ['cartCount' => $count, 'fieches' => $fieches, 'images' => $images, 'products' => $products]);
    }
    public function freezeUser(Request $request)
    {
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }

        DB::table("users")->where("id", $request["userId"])->update(["isdisable" => 1]);
        auth()->logout();
        return redirect()->route('index');
    }
    public function freezeUsers(Request $request)
    {
        if ($request["userId"]) {
            DB::table("users")->where("id", $request["userId"])->update(["isrequest" => 1]);
        }


        return redirect()->route('index');
    }
    public function getCart(Request $request)
    {
        $totalPrice = 0;
        $durum = false;
        $productTotal = 0;
        if ($request->session()->get('Count')) {
            $durum = true;
            $count = $request->session()->get('Count');
            $productCount = $request->session()->get('productCount');
            $productArr = array();
            $total = 0;
            $productDetArr = array();
            $imageArr = array();
            $imagePathArr = array();
            $PathArr = array();
            $detArr = array();
            $productDetIdArr = array();
            $productPrices = array();
            foreach ($request->session()->get('ProductId') as $key => $value) {
                $products = DB::table("products")->whereId($value)->get();
                $productdet =  DB::table("productdetail")->where("ProductId", $value)->get();
                $image =  DB::table("productimages")->where("ProductId", $value)->get();
                array_push($productArr, $products);
                array_push($productDetArr, $productdet);
                array_push($imageArr, $image);
            }

            foreach ($imageArr as $key => $value) {
                $imagePath =  DB::table("images")->where("id", $value[0]->PhotoId)->get();
                array_push($imagePathArr, $imagePath);
            }
            foreach ($imagePathArr as $key => $value) {
                array_push($PathArr, $value[0]->Path);
            }
            foreach ($productDetArr as $key => $value) {
                $total +=  $productCount[$key] * $value[0]->UnitPrice;
                array_push($productPrices, $productCount[$key] * $value[0]->UnitPrice);
                array_push($detArr, $value[0]->UnitPrice);
                array_push($productDetIdArr, $value[0]->id);
            }
            $request->session()->put('productDetail', $productDetIdArr);
            $request->session()->put('productPrices', $productPrices);
            return view("Home.cart", ['detArr' => $detArr, 'productDetId' => $productDetIdArr, 'total' => $total, '$productTotal' => $productTotal, 'productCount' => $productCount, 'totalPrice' => $totalPrice, 'cartCount' => $count, 'durumBilgisi' => $durum, 'productList' => $productArr, 'productDetList' => $detArr, 'photoPathList' => $PathArr]);
        } else {
            $count = 0;
            $productCount = $request->session()->get('productCount');
            return view("Home.cart", ['$productTotal' => $productTotal, 'productCount' => $productCount, 'totalPrice' => $totalPrice, 'cartCount' => $count, 'durumBilgisi' => $durum]);
        }
    }
    public function setFieche(Request $request)
    {
        $myItems = $request->session()->get('productDetail');
        $productCount = $request->session()->get('productCount');
        $productPrices = $request->session()->get('productPrices');
        $errorMessage = "";
        foreach ($myItems as $key => $value) {
            $userAdress = DB::table("useradress")->where("User_id", auth()->user()->id)->get("id")->count() >= 2 ? DB::table("useradress")->where("User_id", auth()->user()->id)->where("isDefault", 1)->get() : DB::table("useradress")->where("User_id", auth()->user()->id)->get();
            $number =  DB::table("productdetail")->where("id", $myItems[$key])->get("Count");
            if ($number < $productCount[$key]) {
                $errorMessage = "Stokta daha az ürün vardır.Stok Sayisi :  | " . $number . " | ";
                return view("Home.stokyetersiz");
            } else {
                DB::table("fieche")->insert(["ProductDetId" => $myItems[$key], "UserId" => auth()->user()->id, "AdressId" => $userAdress[0]->id, "LineTotal" => $productPrices[$key], "counts" => $productCount[$key]]);
            }
        }
        $request->session()->remove('Count');
        $request->session()->remove('ProductId');
        $request->session()->remove('productCount');
        $request->session()->remove('productDetail');
        $request->session()->remove('productPrices');
        return redirect()->route('shopTrack');
    }
    public function about(Request $request)
    {
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        $fiecheCount =  DB::table("fieche")->get()->count();
        return view("Home.about", ['cartCount' => $count, 'fiecheCount' => $fiecheCount]);
    }

    public function getProfile(Request $request)
    {

        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        return view("Home.profile", ['cartCount' => $count]);
    }


    public function getProduct(Request $request)
    {
        $categories = DB::table("category")->get();


        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        if ($request["category"] == null) {
            $durum = false;
            $allproductList = DB::table("products")->where('isStock', 0)->get();
            if ($request["id"] == null) {
                $products =  DB::table("products")->take(6)->get();
                $productdet =  DB::table("productdetail")->take(6)->get();
                $imagess =  DB::table("images")->take(6)->get();
            } else {
                $products =  DB::table("products")->skip((int)$request["id"])->take(6)->get();
                $productdet =  DB::table("productdetail")->skip((int)$request["id"])->take(6)->get();

                $imagess =  DB::table("images")->skip((int)$request["id"])->take(6)->get();
            }
        } else {
            if ($request["id"] == null) {
                $durum = true;
                $products = array();
                $ImageArr = array();
                $imagess = array();
                $productdet =  DB::table("productdetail")->where("CategoryId", $request["category"])->take(6)->get();
                foreach ($productdet as $key => $value) {
                    $productsItem =  DB::table("products")->whereId($value->ProductId)->get();
                    $tempImage =  DB::table("productimages")->where('ProductId', $value->ProductId)->get("PhotoId");
                    array_push($ImageArr,  $tempImage[0]->PhotoId);
                    array_push($products,  $productsItem);
                }
                foreach ($ImageArr as $key => $value) {
                    $tempImage =  DB::table("images")->whereId($ImageArr[$key])->get();
                    array_push($imagess,  $tempImage);
                }
                $allproductList = $products;
            } else {
                $products = array();
                $ImageArr = array();
                $imagess = array();
                $productdet =  DB::table("productdetail")->where("CategoryId", $request["category"])->skip((int)$request["id"])->take(6)->get();
                foreach ($productdet as $key => $value) {

                    $productsItem =  DB::table("products")->whereId($value->ProductId)->get();
                    $tempImage =  DB::table("productimages")->where('ProductId', $value->ProductId)->get();
                    array_push($ImageArr,  $tempImage);
                    array_push($products,  $productsItem);
                }
                foreach ($ImageArr as $key => $value) {
                    $tempImage =  DB::table("images")->whereId($value->PhotoId)->get();
                    array_push($imagess,  $tempImage);
                }
                $allproductList = $products;
            }
        }
        return view('Home.shop', ['durumBilgisi' => $durum, 'categories' => $categories, 'allproductList' => $allproductList, 'products' => $products, 'productdet' => $productdet, 'imagess' => $imagess, 'cartCount' => $count, 'sayac' => 1]);
    }

    public function productDetail(Request $request)
    {
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }

        $imageId = 0;
        $prodId = $request["id"];
        $userList = array();
        $reviews = DB::table("comments")->where("ProductId", $request["id"])->where("IsOk", 1)->get();
        foreach ($reviews as $key => $value) {
            $user = DB::table("users")->whereId($value->UserId)->get();
            array_push($userList, $user[0]->name);
        }

        $products =  DB::table("products")->whereId($request["id"])->get();
        $productdet =  DB::table("productdetail")->where("ProductId", $request["id"])->get();
        $productCategory =  DB::table("category")->whereId($productdet[0]->CategoryId)->get();
        $image =  DB::table("productimages")->where("ProductId", $request["id"])->get();
        foreach ($image as $key => $value) {
            $imageId = $value->PhotoId;
        }
        $imagess =  DB::table("images")->where("id", $imageId)->get();

        $releatedProduct = DB::table("products")->orderByDesc("id")->take(6)->get();
        $releatedProductdet =  DB::table("productdetail")->orderByDesc("id")->take(6)->get();
        $releatedImage =  DB::table("images")->orderByDesc("id")->take(6)->get();
        if (auth()->user()) {
            $yetkiKontrol = DB::table("fieche")->where("UserId", auth()->user()->id)->where("ProductDetId", $productdet[0]->id)->get();
            foreach ($yetkiKontrol as $key => $value) {
                $yetkiKontrol = true;
                return view('Home.productDetail', ['yetkiKontrol' => $yetkiKontrol, 'userList' => $userList, 'reviews' => $reviews, 'productId' => $prodId, 'productCategory' => $productCategory, 'releatedProduct' => $releatedProduct, 'releatedProductdet' => $releatedProductdet, 'releatedImage' => $releatedImage, 'products' => $products, 'productdet' => $productdet, 'imagess' => $imagess, 'cartCount' => $count]);
            }
        }
        $yetkiKontrol = false;
        return view('Home.productDetail', ['yetkiKontrol' => $yetkiKontrol, 'userList' => $userList, 'reviews' => $reviews, 'productId' => $prodId, 'productCategory' => $productCategory, 'releatedProduct' => $releatedProduct, 'releatedProductdet' => $releatedProductdet, 'releatedImage' => $releatedImage, 'products' => $products, 'productdet' => $productdet, 'imagess' => $imagess, 'cartCount' => $count]);
    }
    public function setComment(Request $request)
    {
        $request->validate([
            "commentText" => "required",
        ]);
        DB::table("comments")->insert(["ProductId" => $request["productId"], "UserId" => $request["userId"], "CommentText" => $request["commentText"]]);
        return redirect()->back();
    }

    public function setCurrentAdress(Request $request)
    {
        DB::table("useradress")->where("User_id", auth()->user()->id)->update(["isDefault" => 0]);
        DB::table("useradress")->where("Id", $request["id"])->update(["isDefault" => 1]);
        return redirect()->back();
    }
    public function buyOrders(Request $request)
    {
        foreach ($request->session()->get('productCount') as $key => $value) {
            DB::table("fieche")->insert(["ProductDetId" => 1, "UserId" => 1, "AdressId" => 1, "LineTotal" => 1, "counts" => 1]);
        }


        return redirect()->back();
    }
    public function addAdress(Request $request)
    {
        $request->validate([
            "ulke" => "required",
            "il" => "required",
            "ilce" => "required",
            "adress" => "required",
            "zipKodu" => "required",
        ]);
        DB::table("useradress")->insert(["User_Id" => auth()->user()->id, "Region" => $request["ulke"], "AdressText" => $request["adress"], "Province" => $request["il"], "District" => $request["ilce"], "ZipCode" => $request["zipKodu"]]);
        return redirect()->route('useradress');
    }


    public function setAdress(Request $request)
    {

        return view("Home.addAdress");
    }

    public function setCart(Request $request)
    {
        $durum = false;
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
            $productList = $request->session()->get('ProductId');
            $productCount = $request->session()->get('productCount');
            foreach ($productList as $key => $value) {
                if ($value == $request["prodId"]) {
                    $durum = true;
                }
            }
            if ($durum != true) {
                $count++;
                array_push($productList, $request["prodId"]);
                array_push($productCount, $request["count"]);
                $request->session()->put('ProductId', $productList);
                $request->session()->put('productCount', $productCount);
                $request->session()->put('Count', $count);
            }
            return redirect()->route('showCart');
        }
        $count = 1;
        $newArray = array($request["prodId"]);
        if ($request["count"]) {
            $countArr = array($request["count"]);
        } else {
            $countArr = array(1);
        }
        $request->session()->put('productCount', $countArr);
        $request->session()->put('ProductId', $newArray);
        $request->session()->put('Count', $count);
        return redirect()->route('showCart');
    }
    public function deleteCart(Request $request)
    {
        $newArr = array();
        $newArr2 = array();
        $newArr3 = array();
        $newArr4 = array();
        $productDetArr = $request->session()->get('productDetail');
        $productPricesArr = $request->session()->get('productPrices');
        foreach ($request->session()->get('ProductId') as $key => $value) {
            if ($value != $request["prodId"] &&  $productDetArr[$key] != $request["productDetailId"]) {
                array_push($newArr, $value);
                array_push($newArr3,  $productDetArr[$key]);
            }
        }
        foreach ($request->session()->get('ProductId') as $key => $value) {
            if ($value != $request["prodId"] &&  $productPricesArr[$key] != $request["productPrice"]) {
                array_push($newArr4,  $productPricesArr[$key]);
            }
        }
        $sayi =   count($request->session()->get('productCount'));
        foreach ($request->session()->get('productCount') as $key => $value) {
            if ($key != $sayi - 1) {
                array_push($newArr2, $value);
            }
        }
        $count = $request->session()->get('Count');
        if ($count > 0) {
            $count--;
        } else {
            $count = 0;
        }
        $request->session()->put('Count', $count);
        $request->session()->put('ProductId', $newArr);
        $request->session()->put('productCount', $newArr2);
        $request->session()->put('productDetail', $newArr3);
        $request->session()->put('productPrices', $newArr4);
        return redirect()->route('showCart');
    }
}
