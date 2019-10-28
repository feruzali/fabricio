<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $table = 'products';



    use Sluggable;

    protected $fillable = [
        'is_auth',
        'title',
        'description',
        'price',
        'category_id',
        'brand_id',
        'char_title',
        'char_value',
        'preview_image'
    ];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function colors(){

        return $this->hasMany(ProductColor::class, 'product_id', 'id');

    }

    public function category(){
        return $this->hasOne('App\Model\Categories', 'id', 'category_id');
    }

    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removePreviewImage();
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads/product/', $filename);
        $this->preview_image = $filename;
        $this->save();
    }

    private function uploadSideImage($image, string $field)
    {
        if (!$image) return;
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads/product/', $filename);
        $this->$field = $filename;
        $this->save();
    }

    public function uploadSidesImages($request)
    {
        if ($this->left_image && $request->has('left_image'))
            Storage::delete('uploads/product/'.$this->left_image);
        if ($this->front_image && $request->has('front_image'))
            Storage::delete('uploads/product/'.$this->front_image);
        if ($this->right_image && $request->has('right_image'))
            Storage::delete('uploads/product/'.$this->right_image);
        $this->uploadSideImage($request->file('left_image'), 'left_image');
        $this->uploadSideImage($request->file('front_image'), 'front_image');
        $this->uploadSideImage($request->file('right_image'), 'right_image');
    }



    public function getImage()
    {
        if($this->preview_image == null)
        {
            return '/img/no-image.png';
        }
        return '/uploads/product/' . $this->preview_image;
    }

    public function getLeftImage()
    {
        if ($this->left_image)
            return '/uploads/product/' . $this->left_image;
        return '/img/no-image.png';
    }

    public function getFrontImage()
    {
        if ($this->front_image)
            return '/uploads/product/' . $this->front_image;
        return '/img/no-image.png';
    }

    public function getRightImage()
    {
        if ($this->right_image)
            return '/uploads/product/' . $this->right_image;
        return '/img/no-image.png';
    }


    public function removePreviewImage()
    {
        if ($this->preview_image != null)
        {
            Storage::delete('uploads/product/' . $this->preview_image);
        }
    }

    public function getShortDescription()
    {
        return Str::limit($this->description, 150);
    }

    /**
     * Get all ancestors slugs from category and its ancestors and plus product slug
     *
     * @return string
    */
    public function getAncestorsSlugs()
    {
        $category = $this->category;
        $categoriesSlugs = ($category) ? $category->getAncestorsSlugs() : '';
        $slugs = $categoriesSlugs . "/$this->slug";
        return $slugs;
    }

    /**
     * Get all product images from colors
     *
     * @return array
    */
    public function getAllImages()
    {
        $images = collect();
        foreach ($this->colors as $color)
            $images->merge($color->images);
        return $images;
    }

    public function getAllImagesWithPreview()
    {
        $images = collect();
        $images->push($this->getImage());
        $images->merge($thi->getAllImages());
        return $images;
    }
}
