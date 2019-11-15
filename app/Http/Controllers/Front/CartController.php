<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Order;
use Illuminate\Support\Facades\Validator;

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
                    "name" => $product->title,
                    "quantity" => $quantity,
                    "price" => $product->price,
                    "photo" => $product->getCatalogImage()
                ]
            ];
            session()->put('cart', $cart);
        }
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
            session()->put('cart', $cart);
        }

        $cart[$productId] = [
            "name" => $product->title,
            "quantity" => $quantity,
            "price" => $product->price,
            "photo" => $product->getCatalogImage()
        ];
        session()->put('cart', $cart);
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

    public function createOrder(Request $request) {
        if ($request->get('requisites') == 'doNotMakeCotntract') {
            Validator::make($request->all(), [
                'name' => ['required', 'string'],
                'phone_number' => ['required', 'string']
            ])->validate();
            $registrationRequest = auth()->user()->registrationRequest;
            $order = Order::create([
                'name' => $request->get('name'),
                'phone_number' => $request->get('phone_number'),
                'email' => $request->get('email'),
                'comment' => $request->get('comment'),
                'user_id' => auth()->user()->id
            ]);
        } else {
            Validator::make($request->all(), [
                'name' => ['required', 'string'],
                'phone_number' => ['required', 'string'],
                'company_name' => ['required', 'string', 'unique:registration_requests'],
                'bank' => ['required', 'string'],
                'address' => ['required', 'string'],
                'tin' => ['required', 'string', 'min:9', 'max:9'],
                'ctea' => ['required', 'string', 'min:5', 'max:5'],
                'mfi' => ['required', 'string', 'min:5', 'max:5'],
            ])->validate();
            $order = Order::create($request->all());
        }
        foreach (session()->get('cart') as $productId => $details) {
            $orderItem = $order->orderItems()->create([
                'title' => $details['name'],
                'price' => $details['price'],
                'quantity' => $details['quantity'],
                'product_id' => $productId,
                'preview_image' => ''
            ]);
            $orderItem->uploadImage($details['photo']);
        }
        session()->forget('cart');
        return redirect()->route('home');

    }
}
