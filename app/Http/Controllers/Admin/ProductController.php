<?php

namespace App\Http\Controllers\Admin;

use App\Model\Categories;
use App\Model\Product;
use App\Model\ProductImage;
use App\Model\ProductColor;
use App\Model\Brands;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::orderBy('id', 'desc')->where('parent_id', null)->get();
        $brands = Brands::all();
        return view('admin.pages.products.create', [
            'category' => [],
            'categories' => $categories,
            'delimiter' => '',
            'brands' =>  $brands
        ]);
    }


    public function removeGalleryImage($image_id, $product_id)
    {
        $image = ProductImage::findOrFail($image_id);
        $image->removeImage();
        $image->delete();

        return redirect()->route('products.edit', $product_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ru_title' => 'required',
            'ru_description' => 'required',
            'category_id' => 'required',
            'preview_image' =>  'nullable|image'
        ]);
        $data = $request->all();
        $product = Product::create([
            'title' => $data['ru_title'],
            'is_auth' => $request->has('is_auth') ? true : false,
            'description' => $data['ru_description'],
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'brand_id' => $data['brand_id'],
            'preview_image' => ''
        ]);
        if($request->get('charTitle') != null){
            $product->ru_characteristics_title  = serialize($request->get('charTitle'));
            $product->save();
        }

        if($request->get('charValue') != null){
            $product->ru_characteristics_value= serialize($request->get('charValue'));
            $product->save();
        }


        $product->uploadImage($request->file('preview_image'));

        if ($request->has('colors')) {
            $colors = $request->get('colors');
            foreach ($colors as $number => $color) {
                $productColor = $product->colors()->create([
                    'name' => $color['name'],
                    'colorHEX' => $color['hex']
                ]);
                if ($request->has("color-images-$number")) {
                    $images = $request->file("color-images-$number");
                    foreach ($images as $image) {
                        $productImage = $productColor->images()->create();
                        $productImage->uploadImage($image);
                    }
                }
            }
        }
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Categories::orderBy('id', 'desc')->where('parent_id', null)->get();
        $gallery = ProductImage::all();
        $common = [];
        if($product->ru_characteristics_title != null){
            $first = unserialize(urldecode($product->ru_characteristics_title));
            try{
                $second = unserialize(urldecode($product->ru_characteristics_value));
            }catch(\Exception $e){
                $second = '';
            }
            $common = [$first, $second];
        }
        return view('admin.pages.products.edit', [
            'category' => [],
            'categories' => $categories,
            'product' => $product,
            'delimiter' => '',
            'common' => $common,
            'gallery' => $gallery
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $product = Product::find($id);

        $product->update([
            'is_auth' => $data['is_auth'],
            'title' => $data['title'],
            'description' => $data['description'],
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'brand_id' => $data['brand_id']
        ]);

        if($request->get('charTitle') != null){
            $product->ru_characteristics_title  = serialize($request->get('charTitle'));
            $product->save();
        }

        if($request->get('charValue') != null){
            $product->ru_characteristics_value= serialize($request->get('charValue'));
            $product->save();
        }

        $product->uploadImage($request->file('img'));
        if($request->file('file') != null){
            if(is_array($request->file('file')))
            {
                foreach ($request->file('file') as $file)
                {
                    $image = ProductImage::create([
                        'product_id' => $product->id
                    ]);
                    $image->uploadImage($file);
                }
            }
        }
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->removePreviewImage();
        $cat = ProductImage::where('product_id', $id)->get();
        $path = public_path() . '/uploads/product/';
        foreach ($cat as $item){
            if($item->img != null)
                Storage::delete('uploads/product/' . $item->img);

            $item->delete();
        }
        $preview = $path . $product->img;
        if(File::exists($preview)){
            File::delete($preview);
        }
        Product::find($id)->delete();
        return redirect()->back();
    }
}
