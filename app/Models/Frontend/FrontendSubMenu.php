<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class FrontendSubMenu extends Model
{
    protected $table='frontend_sub_menus';
    protected $fillable=['name','url','status','serial_num','menu_id','slug'];

}
