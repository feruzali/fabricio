<?php

namespace App\Http\Controllers\Front;

use App\Model\Brands;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Categories;
use App\Model\Product;

class CatalogController extends Controller
{
    /**
     * A main action for all catalog actions
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $categories = Categories::all();
        $products = Product::paginate(20);
        $brands = Brands::all();

        return view('front.catalog.index', compact('categories', 'brands', 'products'));
    }
}
