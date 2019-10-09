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


    public function img(){

        return $this->hasMany('App\Model\ProductImage', 'id', 'img_id');

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



    public function getImage()
    {
        if($this->preview_image == null)
        {
            return '/img/no-image.png';
        }
        return '/uploads/product/' . $this->preview_image;
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
}
