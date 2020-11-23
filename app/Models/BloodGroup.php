<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{
    protected $table='blood_groups';
    protected $fillable=['name','url','mobile','admin_name','serial_num','status'];
}
