<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {

        return view("Admin.index");
    }

    public function userList()
    {

        $veriler =  DB::table("users")->get();
        return view("Admin.usermanagement", ['veriler' => $veriler]);
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
}
