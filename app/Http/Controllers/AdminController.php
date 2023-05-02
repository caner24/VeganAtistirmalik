<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {

        $productsCount = DB::table("products")->get()->count();
        $veriler =  DB::table("comments")->where('IsOk', 1)->take(5)->get();

        if ($veriler != null) {
            $userNames = array();
            $productNames = array();
            foreach ($veriler as $key => $value) {
                $user = DB::table("users")->whereId($value->UserId)->get();

                array_push($userNames, $user[0]->name);

                $user = DB::table("products")->whereId($value->ProductId)->get();

                array_push($productNames, $user[0]->ProductName);
            }
            return view('Admin.index', ['productCount' => $productsCount, 'prodcutNames' => $productNames, 'usernames' => $userNames, 'comments' => $veriler]);
        }
        return view('Admin.index', ['productCount' => $productsCount]);
    }

    public function userList()
    {

        $veriler =  DB::table("users")->get();
        return view("Admin.usermanagement", ['veriler' => $veriler]);
    }
    public function satistanCek(Request $request)
    {

        if ($request["isOk"]) {
            DB::table("products")->where('id', $request["id"])->update(["isStock" => 0]);
        } else {
            DB::table("products")->where('id', $request["id"])->update(["isStock" => 1]);
        }

        $veriler =  DB::table("images")->get();
        return view("Admin.productwarzone", ['veriler' => $veriler]);
    }

    public function urunYönetim()
    {
        $owners =  DB::table("owner")->get();
        $category =  DB::table("category")->get();
        return view("Admin.productmanagement", ['owners' => $owners, 'category' => $category]);
    }

    public function freezeUser(Request $request)
    {
        DB::table("users")->where("id", $request["userId"])->update(["isdisable" => 1]);
        return redirect()->route('userlist');
    }

    public function freezeBreakUser(Request $request)
    {
        DB::table("users")->where("id", $request["userId"])->update(["isdisable" => 0]);
        return redirect()->route('userlist');
    }


    public function addProduct(Request $request)
    {
        $request->validate([
            "productName" => "required",
            "owners" => "required",
            "productCount" => "required",
            "productPrice" => "required",
            "productPhoto" => "required",
            "category" => "required",
        ]);

        $resimPath = $request->productPhoto->getclientoriginalname();
        $yukle = $request->productPhoto->move(public_path('images'), $resimPath);
        $imageId =  DB::table("images")->insertGetId(["Path" =>   $resimPath]);
        $productId =   DB::table("products")->insertGetId(["productName" => $request["productName"], "OwnerId" => $request["owners"]]);
        DB::table("productdetail")->insert(["Count" => $request["productCount"], "UnitPrice" => $request["productPrice"], "ProductId" => $productId, "CategoryId" => $request["category"]]);
        DB::table("productimages")->insert(["ProductId" => $productId, "photoId" => $imageId]);
        return redirect()->route('urunyönetim');
    }
    public function updateProduct(Request $request)
    {
        $request->validate([
            "productName" => "required",
            "owners" => "required",
            "productCount" => "required",
            "productPrice" => "required",
            "category" => "required",
        ]);

        if ($request["productPhoto"] && $request["productPhoto"] != $request["photoName"]) {
            $resimPath = $request->productPhoto->getclientoriginalname();
            $yukle = $request->productPhoto->move(public_path('images'), $resimPath);
            DB::table("images")->where("id", $request["productId"])->update(["Path" =>   $resimPath]);
        }

        DB::table("products")->where("id", $request["productId"])->update(["productName" => $request["productName"], "OwnerId" => $request["owners"]]);
        DB::table("productdetail")->where("ProductId", $request["productId"])->update(["Count" => $request["productCount"], "UnitPrice" => $request["productPrice"], "ProductId" => $request["productId"], "CategoryId" => $request["category"]]);
        DB::table("productimages")->where("ProductId", $request["productId"])->update(["ProductId" => $request["productId"], "photoId" => $request["productId"]]);
        return redirect()->route('urunstok');
    }
    public function addOwner(Request $request)
    {
        $request->validate([
            "ownername" => "required",
        ]);
        DB::table("owner")->insert(["name" => $request["ownername"]]);
        return redirect()->route('urunyönetim');
    }

    public function addCategory(Request $request)
    {
        $request->validate([
            "category" => "required",
        ]);
        DB::table("category")->insert(["name" => $request["category"]]);
        return redirect()->route('urunyönetim');
    }
    public function urunStok()
    {
        $veriler =  DB::table("images")->get();
        return view("Admin.productwarzone", ['veriler' => $veriler]);
    }
    public function okComments(Request $request)
    {
        $veriler =  DB::table("comments")->whereId($request["details"])->update(["IsOk" => 1]);
        return redirect()->route('getComment');
    }
    public function deleteComment(Request $request)
    {
        $veriler =  DB::table("comments")->whereId($request["details"])->delete();
        return redirect()->route('getComment');
    }
    public function productUpdate(Request $request)
    {
        $veriler =  DB::table("images")->whereId($request["datas"])->get();
        $productId = DB::table("productimages")->where('PhotoId', $veriler[0]->id)->get();
        $products =  DB::table("products")->whereId($productId[0]->ProductId)->get();
        $productDetail =  DB::table("productdetail")->where('ProductId', $products[0]->id)->get();

        $productCategory =  DB::table("category")->whereId($productDetail[0]->CategoryId)->get();
        $allCategory =  DB::table("category")->get();
        $productOwner =  DB::table("owner")->whereId($products[0]->OwnerId)->get();
        $allOwner =  DB::table("owner")->get();
        return view("Admin.productUpdate", ['productOwner' => $productOwner, 'allOwner' => $allOwner, 'datas' => $veriler, 'products' => $products, 'productDetails' => $productDetail, 'productCategory' => $productCategory, 'allCategory' => $allCategory]);
    }
    public function getComments()
    {
        $veriler =  DB::table("comments")->get();
        $userNames = array();
        $productNames = array();
        foreach ($veriler as $key => $value) {
            $user = DB::table("users")->whereId($value->UserId)->get();

            array_push($userNames, $user[0]->name);

            $user = DB::table("products")->whereId($value->ProductId)->get();

            array_push($productNames, $user[0]->ProductName);
        }
        return view("Admin.comments", ['prodcutNames' => $productNames, 'usernames' => $userNames, 'comments' => $veriler]);
    }
}
