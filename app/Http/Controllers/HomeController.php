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
        $categories = Categories::all();
        $sliders = Slider::all();
        $contact = Contact::find(1);
        return view('front.welcome', compact('categories', 'sliders', 'contact'));
    }
}
