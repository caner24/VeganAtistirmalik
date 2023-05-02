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
    public function getUserProfile(Request $request){

        return view("Home.profile");
    }
    public function getShopTrack(Request $request)
    {
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        return view("Home.userorders", ['cartCount' => $count]);
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
            return view("Home.cart", ['total' => $total, '$productTotal' => $productTotal, 'productCount' => $productCount, 'totalPrice' => $totalPrice, 'cartCount' => $count, 'durumBilgisi' => $durum, 'productList' => $productArr, 'productDetList' => $detArr, 'photoPathList' => $PathArr]);
        } else {
            $count = 0;
            $productCount = $request->session()->get('productCount');
            return view("Home.cart", ['$productTotal' => $productTotal, 'productCount' => $productCount, 'totalPrice' => $totalPrice, 'cartCount' => $count, 'durumBilgisi' => $durum]);
        }
    }

    public function about(Request $request)
    {
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }

        return view("Home.about", ['cartCount' => $count]);
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
        return view('Home.productDetail', ['userList' => $userList, 'reviews' => $reviews, 'productId' => $prodId, 'productCategory' => $productCategory, 'releatedProduct' => $releatedProduct, 'releatedProductdet' => $releatedProductdet, 'releatedImage' => $releatedImage, 'products' => $products, 'productdet' => $productdet, 'imagess' => $imagess, 'cartCount' => $count]);
    }
    public function setComment(Request $request)
    {

        DB::table("comments")->insert(["ProductId" => $request["productId"], "UserId" => $request["userId"], "CommentText" => $request["commentText"]]);
        return redirect()->back();
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
        foreach ($request->session()->get('ProductId') as $key => $value) {
            if ($value != $request["prodId"]) {
                array_push($newArr, $value);
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
        return redirect()->route('showCart');
    }
}
