<?php

namespace App\Http\Controllers;

use App\Model\Categories;
use App\Model\Slider;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $lastProductsQuery = Categories::findOrFail(3)->getLastProducts(8);
        if (!Auth::check())
            $lastProductsQuery->where('is_auth', true);
        $products = $lastProductsQuery->get();
        return view('front.welcome', compact('sliders', 'products'));
    }

    public function about()
    {
        return view('front.about');
    }
}
