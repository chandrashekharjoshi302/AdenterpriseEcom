<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class WishlistController extends Controller
{
    public function getWishlistedProducts()
    {
        $items = Cart::instance("wishlist")->content();
        return view('wishlist', ['items' => $items]);
    }

    public function addProductToWishlist(Request $request)
    {

        // Convert price to float
        $price = (float) $request->price;

        Cart::instance('wishlist')->add(
            $request->product_id,
            $request->product_name,
            1, // Default quantity
            $price // Converted to float
        )->associate('App\Models\Product');

        return redirect('wishlist');
    }


    public function removeProductFromWishlist(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance("wishlist")->remove($rowId);
        return redirect()->route('wishlist.list');
    }

    public function clearWishlist()
    {
        Cart::instance("wishlist")->destroy();
        return redirect()->route('wishlist.list');
    }

    public function moveToCart(Request $request)
    {
        $item = Cart::instance('wishlist')->get($request->rowId);
        Cart::instance('wishlist')->remove($request->rowId);
        Cart::instance('cart')->add($item->model->id, $item->model->name, 1, $item->model->regular_price)->associate('App\Models\Product');
        return redirect()->route('wishlist.list');
    }
}
