<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;
use App\Models\Product;

class LayoutController extends Controller
{
    public function login(){
        return view("products/login");
    }

    public function index(){
        $products = Product::all();

        return view("products/index",compact("products"));
    }

    public function item(){
        return view("products/item");
    }

    public function store(Request $request){
        Userinfo::create([
            "email" => $request->email,
            "password" => $request->password
        ]);


        return redirect("index");

        
    }
}
