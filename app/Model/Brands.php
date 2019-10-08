<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Brands extends Model
{
    protected $table = 'brands';
    protected $fillable = ['title', 'description', 'logotype'];

    public function uploadImage($image)
    {
        if($image == null) return;

        $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs('uploads/brands/', $filename);
        $this->logotype = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->logotype != null)
            Storage::delete('uploads/brands/' . $this->logotype);
    }

    public function getImage()
    {
        if($this->logotype != null)
            return asset('uploads/brands/' . $this->logotype);
        else
            return asset('assets/img/avatars/avatar9.jpg');
    }


}
