<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThanaUpazila extends Model
{
    protected $table='thana_upazilas';
    protected $fillable=['district_id','thana_upazila','status','serial_num'];
}
