<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function manage()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = Product::where('user_id', '=', Session::get('loginId'))->get();
        }
        return view('product.manage', compact('data'));
    }

    public function viewAllProducts()
    {
        $data = array();
        $data = Product::all();
        return view('products', compact('data'));
    }
    public function updateProduct(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required|max:512',
            'price' => 'required',
            'stock' => 'required|min:0',
            'size' => 'required',
            'gender' => 'required'
        ]);

        $product = Product::where('id', '=', $request->id)->first();

        if (!$product) return back()->with('fail', 'Product not found');

        // echo $product->name;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->size = $request->size;
        $product->gender = $request->gender;
        // echo "Working";
        $res = $product->save();

        if ($res) return back()->with('success', 'Product updated successfully');
        else return back()->with('fail', 'Unable to update product');
    }

    public function addProduct(Request $request)
    {

        $request->validate([
            'name' => 'required|max:512',
            'price' => 'required',
            'stock' => 'required|min:0',
            'size' => 'required',
            'product_image' => 'required|image',
            'gender' => 'required'
        ]);

        // // If uploading images doesnt work
        // echo ($request->allFiles());
        // echo ("<br>");
        // if ($request->hasFile('product_image')){
        //     echo ("yes");
        // }

        $path = $request->file('product_image')->store('products-images');

        // echo $path;
        $product = new Product();
        $product->user_id = Session::get('loginId');
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->size = $request->size;
        $product->gender = $request->gender;
        $product->imgPath = $path;
        // echo "Working";
        $res = $product->save();

        if ($res) return back()->with('success', 'Product added');
        else return back()->with('fail', 'Unable to add product');
    }
}
