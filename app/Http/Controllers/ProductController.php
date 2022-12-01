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
        $data = Product::all();
        return view('products_f', compact('data'));
    }
    public function updateProduct(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required|max:512',
            'price' => 'required',
            'stock' => 'required|min:0',
            'size' => 'required',
            'desc' => 'required',
            'gender' => 'required',

        ]);

        // echo $request->name;
        echo $request->file('product_image') == null;
        $product = Product::where('id', '=', $request->id)->first();

        if (!$product) return back()->with('fail', 'Product not found');
        if ($product->name == $request->name && $product->desc == $request->desc && $product->price == $request->price && $product->stock == $request->stock && $product->size == $request->size && $product->gender == $request->gender && $request->file('product_image') == null)
            return back()->with('fail', 'No changes made');

        if ($request->file('product_image') != null) {
            $request->validate([
                'product_image' => 'required|image',
            ]);
            $path = $request->file('product_image')->store('public/product-images');
            $fileName = basename($path);
            $product->imgPath = $fileName;
        }
        // echo $product->name;
        $product->name = $request->name;
        $product->desc = $request->desc;
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
            'desc' => 'required',
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

        $path = $request->file('product_image')->store('public/product-images');
        $fileName = basename($path);

        // echo $path;
        $product = new Product();
        $product->user_id = Session::get('loginId');
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->size = $request->size;
        $product->gender = $request->gender;
        $product->imgPath = $fileName;
        // echo "Working";
        $res = $product->save();

        if ($res) return back()->with('success', 'Product added');
        else return back()->with('fail', 'Unable to add product');
    }
}
