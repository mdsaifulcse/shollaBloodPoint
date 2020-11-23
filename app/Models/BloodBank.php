<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    protected $table='blood_banks';
    protected $fillable=['name','url','category','district','contact','address','notes','web','serial_num','status'];
}
