<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    protected $table='photo_galleries';
    protected $fillable=['title','event_date','photo_link','status','created_by','updated_by'];
}
