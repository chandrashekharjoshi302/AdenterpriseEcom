<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{


    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        return view('shop', ['products' => $products]);
    }

    public function productDetials($slug)
    {
        $product = Product::where('slug', $slug)->first();

        // dd($product);
        return view('details', ['product' => $product]);
    }
}
