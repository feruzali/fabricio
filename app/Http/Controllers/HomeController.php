<?php

namespace App\Http\Controllers;

use App\Model\Categories;
use App\Model\Slider;
use Illuminate\Http\Request;
use App\Model\Contact;


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
        return view('front.welcome', compact('sliders'));
    }

    public function cart(){
        //$contact = Contact::find(1);
        //$categories = Categories::all();
        if(isset($_COOKIE['products'])){
            $cookie = json_decode($_COOKIE['products']);
        }else{
            $cookie = [];
        }
        $items = [];
        foreach ($cookie as $key)
        {
            $items[] = Product::find($key->id);
        }

        if(isset($_COOKIE['products'])){
            $count = count(json_decode($_COOKIE['products']));
        }
        return view('front.catalog.card', compact(
            'items',
            'cookie'
        ));
    }
}
