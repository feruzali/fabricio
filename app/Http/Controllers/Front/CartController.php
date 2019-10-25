<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Order;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

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
                    "photo" => $product->getImage()
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back();
        }
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
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

    public function createOrder(Request $request) {
        if ($request->get('requisites') == 'useRegistration') {
            Validator::make($request->all(), [
                'name' => ['required', 'string'],
                'phone_number' => ['required', 'string'],
                'email' => ['required', 'email']
            ])->validate();
            $registrationRequest = auth()->user()->registrationRequest;
            $order = Order::create([
                'company_name' => $registrationRequest->company_name,
                'bank' => $registrationRequest->bank,
                'address' => $registrationRequest->address,
                'tin' => $registrationRequest->tin,
                'ctea' => $registrationRequest->ctea,
                'mfi' => $registrationRequest->mfi,
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
                'email' => ['required', 'email'],
                'comment' => ['string'],
                'company_name' => ['required', 'string', 'unique:registration_requests'],
                'bank' => ['required', 'string'],
                'address' => ['required', 'string'],
                'tin' => ['required', 'string', 'min:9', 'max:9'],
                'ctea' => ['required', 'string', 'min:5', 'max:5'],
                'mfi' => ['required', 'string', 'min:5', 'max:5'],
            ])->validate();
            $order = Order::create($request->all());
        }
        session()->forget('cart');
        return redirect()->route('home');

    }
}
