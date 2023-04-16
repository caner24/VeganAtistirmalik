<?php

namespace App\Http\Controllers;

use Google\Service\Fitness\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->flush();
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        return view("Home.index", ['cartCount' => $count]);
    }
    public function getCart(Request $request)
    {
        $durum = false;
        if ($request->session()->get('Count')) {
            $durum = true;
            $count = $request->session()->get('Count');
            $productArr = array();

            foreach ($request->session()->get('ProductId') as $key => $value) {
                $products = DB::table("products")->whereId($value)->get();
                array_push($productArr, $products);
            }
            return view("Home.cart", ['cartCount' => $count, 'durumBilgisi' => $durum, 'productList' => $productArr]);
        } else {
            $count = 0;
            return view("Home.cart", ['cartCount' => $count, 'durumBilgisi' => $durum]);
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
        if ($request->session()->get('Count')) {
            $count = $request->session()->get('Count');
        } else {
            $count = 0;
        }
        $products =  DB::table("products")->get();
        $productdet =  DB::table("productdetail")->get();
        $imagess =  DB::table("images")->get();
        return view('Home.shop', ['products' => $products, 'productdet' => $productdet, 'imagess' => $imagess, 'cartCount' => $count]);
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
        $image =  DB::table("productimages")->where("ProductId", $request["id"])->get();
        foreach ($image as $key => $value) {
            $imageId = $value->PhotoId;
        }
        $imagess =  DB::table("images")->where("id", $imageId)->get();
        return view('Home.productDetail', ['products' => $products, 'productdet' => $productdet, 'imagess' => $imagess, 'cartCount' => $count]);
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
