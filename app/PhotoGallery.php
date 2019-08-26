<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    protected $table = 'photo_gallery';
    protected $fillable = ['image_name', 'image_title'];
}
