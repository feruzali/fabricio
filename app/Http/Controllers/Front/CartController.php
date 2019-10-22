<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;

class CartController extends Controller
{
    public function index()
    {
        return view('front.catalog.cart');
    }

    public function addToCart(Request $request) {
        $productId = $request->get('productId');
        $quantity = $request->get('quantity');

        $product = Product::findOrFail($productId);

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $productId => [
                    "name" => $product->name,
                    "quantity" => $quantity,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back();
        }
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $cart);
            return redirect()->back();
        }

        $cart[$productId] = [
            "name" => $product->name,
            "quantity" => $quantity,
            "price" => $product->price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function removeFromCart(Request $request) {
        if ($request->has('productId')) {
            $cart = session()->get('cart');
            if (isset($cart[$request->get('productId')])) {
                unset($cart[$request->get('productId')]);
                session()->put('cart', $cart);
            }
        }
    }

    public function update(Request $request) {
        if (!$request->has('productId') || !$request->has('quantity'))
            abort(401);
        $cart = session()->get('cart');
        $productId = $request->get('productId');
        $quantity = $request->get('quantity');
        $cart[$productId]['quantity'] = $quantity;
        session()->put('cart', $cart);
    }
}
