<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class OrderItem extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'quantity',
        'product_id',
        'preview_image'
    ];

    public function uploadImage($image)
    {
        if($image == null) { return; }

        $this->removePreviewImage();
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads/orders/', $filename);
        $this->preview_image = $filename;
        $this->save();
    }

    public function getImage()
    {
        if(!$this->preview_image)
            return '/img/no-image.png';
        return '/uploads/orders/' . $this->preview_image;
    }
    public function removePreviewImage()
    {
        if ($this->preview_image)
            Storage::delete('uploads/orders/' . $this->preview_image);
    }

}
