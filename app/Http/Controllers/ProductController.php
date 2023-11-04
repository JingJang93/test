<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProduct(){
        $products = Product::with('category')->get();
        return response()->json(
            ["data" => $products],200
        );

        //return $products;
    }
    public function store(Request $request){
        $product = Product::create($request->all());
        return response()->json(
            ["data"=> $product], 201
        );
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json([
            "data"=> $product
        ], 200);
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return response()->json();
    }
}
