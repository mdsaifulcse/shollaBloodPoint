<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table='pages';
    protected $fillable=['title','url','photo','short_description','details','serial_num','status'];
}
