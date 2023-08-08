<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function read(){

        $products = Product::all();

        return view("products/login")->with("products",$products);
    }

    public function store(Request $request){


        
        $photoName = time() . "." . $request->photo->getClientOriginalExtension();
        $filepath = $request->photo->move(public_path("photos"),$photoName);



        
        Product::create([
            "product_name"=> $request->itemname,
            "category" => $request->category,
            "price" => $request->price,
            "description" => $request->description,
            "item_type" => $request->type,
            "condition" => $request->condition,
            "photo" => $photoName
        ]);

        return redirect("/index");
    }

    public function editpage($id){
        $product = Product::find($id);

        return view("products/editpage")->with("product",$product)->with("id",$id);
    }

    public function edit(Request $request,$id){

        // $photoName = time() . "." . $request->photo->getClientOriginalExtension();
        // $filepath = $request->photo->move(public_path("photos"),$photoName);

        Product::find($id)->update([
            "product_name"=> $request->itemname,
            "category" => $request->category,
            "price" => $request->price,
            "description" => $request->description,
            "item_type" => $request->type,
            "condition" => $request->condition,
            // "photo" => $photoName
        ]);

        return view("products/item");
    }

    public function delete($id){
        $deleteprd = Product::find($id);
        $deleteprd->delete();

        return redirect("index");
    }

    public function more($id){
        $product = Product::where("id",$id)->first();
        // dd($product);
        return view("products/more")->with("product",$product);

        // dd($id);
    }

    public function userview(){

        $products = Product::all();

        return view("products/userview")->with("products",$products);
    }
}
