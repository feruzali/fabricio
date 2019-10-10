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
     * @param string $params
     *
     * @return \Illuminate\Http\Response
    */
    public function index(Request $request, string $params)
    {
        $paramsArray = explode('/', trim($params, '/'));
        $slug = end($paramsArray);

        $category = Categories::where('slug', '=', $slug)->first();
        if ($category)
            return $this->processCategory($request, $category);
        $product = Product::where('slug', '=', $slug)->first();
        if ($product)
            return $this->processProduct($product);
        abort(404);
    }

    private function processCategory(Request $request, Categories $category)
    {
        $productsQuery = $category->products();
        $data = [];
        if ($request->has('brand_id')) {
            $data['brand_id'] = $request->get('brand_id');
            $productsQuery = $productsQuery->where('brand_id', '=', $request->get('brand_id'));
        }
        $products = $productsQuery->get();
        $data['products'] = $products;
        return view('front.catalog.index', $data);
    }

    private function processProduct(Product $product)
    {
        return view('front.catalog.product', compact('product'));
    }
}
