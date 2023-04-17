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
    public function getCart(Request $request)
    {
        $totalPrice = 0;
        $durum = false;
        if ($request->session()->get('Count')) {
            $durum = true;
            $count = $request->session()->get('Count');
            $productArr = array();
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
                array_push($detArr, $value[0]->UnitPrice);
            }
            return view("Home.cart", ['totalPrice' => $totalPrice, 'cartCount' => $count, 'durumBilgisi' => $durum, 'productList' => $productArr, 'productDetList' => $detArr, 'photoPathList' => $PathArr]);
        } else {
            $count = 0;
            return view("Home.cart", ['totalPrice' => $totalPrice, 'cartCount' => $count, 'durumBilgisi' => $durum]);
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

    public function getProduct(Request $request)
    {
        $categories = DB::table("category")->get();

        $allproductList = DB::table("products")->get();
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        if ($request["id"] == null) {
            $products =  DB::table("products")->take(6)->get();
            $productdet =  DB::table("productdetail")->take(6)->get();
            $imagess =  DB::table("images")->take(6)->get();
        } else {
            $products =  DB::table("products")->skip((int)$request["id"])->take(6)->get();
            $productdet =  DB::table("productdetail")->skip((int)$request["id"])->take(6)->get();
            $imagess =  DB::table("images")->skip((int)$request["id"])->take(6)->get();
        }

        return view('Home.shop', ['categories' => $categories, 'allproductList' => $allproductList, 'products' => $products, 'productdet' => $productdet, 'imagess' => $imagess, 'cartCount' => $count, 'sayac' => 1]);
    }

    public function productDetail(Request $request)
    {
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        $imageId = 0;

        $products =  DB::table("products")->whereId($request["id"])->get();
        $productdet =  DB::table("productdetail")->where("ProductId", $request["id"])->get();
        $productCategory =  DB::table("category")->whereId($productdet[0]->CategoryId)->get();
        $image =  DB::table("productimages")->where("ProductId", $request["id"])->get();
        foreach ($image as $key => $value) {
            $imageId = $value->PhotoId;
        }
        $imagess =  DB::table("images")->where("id", $imageId)->get();

        $releatedProduct = DB::table("products")->orderByDesc("id")->get();
        $releatedProductdet =  DB::table("productdetail")->orderByDesc("id")->get();
        $releatedImage =  DB::table("images")->orderByDesc("id")->get();
        return view('Home.productDetail', ['productCategory' => $productCategory, 'releatedProduct' => $releatedProduct, 'releatedProductdet' => $releatedProductdet, 'releatedImage' => $releatedImage, 'products' => $products, 'productdet' => $productdet, 'imagess' => $imagess, 'cartCount' => $count]);
    }

    public function setCart(Request $request)
    {
        $durum = false;
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
            $productList = $request->session()->get('ProductId');
            foreach ($productList as $key => $value) {
                if ($value == $request["prodId"]) {
                    $durum = true;
                }
            }
            if ($durum != true) {
                $count++;
                array_push($productList, $request["prodId"]);
                $request->session()->put('ProductId', $productList);
                $request->session()->put('Count', $count);
            }
            return redirect()->route('showCart');
        }
        $count = 1;
        $newArray = array($request["prodId"]);
        $request->session()->put('ProductId', $newArray);
        $request->session()->put('Count', $count);
        return redirect()->route('showCart');
    }
    public function deleteCart(Request $request)
    {
        $newArr = array();
        foreach ($request->session()->get('ProductId') as $key => $value) {
            if ($value != $request["prodId"]) {
                array_push($newArr, $value);
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
        return redirect()->route('showCart');
    }
}
