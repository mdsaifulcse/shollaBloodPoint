<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrimaryInfo extends Model
{
    protected $table='primary_info';
    protected $fillable=['company_name','logo','favicon','address','mobile_no','email','company_tag','short_description','description','map_embed'];
}
