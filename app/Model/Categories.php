<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Kalnoy\Nestedset\NodeTrait;
use Cviebrock\EloquentSluggable\Sluggable;

class Categories extends Model
{
    use Sluggable , NodeTrait {
        NodeTrait::replicate as replicateNode;
        Sluggable::replicate as replicateSlug;
    }

    public function replicate(array $except = null)
    {
        $instance = $this->replicateNode($except);
        (new SlugService())->slug($instance, true);

        return $instance;
    }



    protected $fillable = [
        'ru_title',
        'ru_description',
        'parent_id',
    ];

    public function uploadImage($image)
    {
        if($image == null) return;

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null)
            Storage::delete('uploads/' . $this->image);
    }

    public function getImage()
    {
        if($this->image != null)
            return '/uploads/' . $this->image;
        else
            return asset('assets/img/avatars/avatar9.jpg');
    }

    public function children()
    {
        return $this->hasMany('App\Model\Categories', 'parent_id', 'id');
    }

    public function hasChildren()
    {
        return (isset($this->children[0])) ? true : false;
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'ru_title'
            ]
        ];
    }
}
