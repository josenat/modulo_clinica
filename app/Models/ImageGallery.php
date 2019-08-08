<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    protected $table = 'image_gallery';

    protected $fillable = ['id_consulta', 'title','image'];
}
