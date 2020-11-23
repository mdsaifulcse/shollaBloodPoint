<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class FrontendMenu extends Model
{
    protected $table='frontend_menus';
    protected $fillable=['name','url','status','serial_num','slug','icon_class','type'];

    public function frontendSubMenu(){
        return $this->hasMany(FrontendSubMenu::class,'menu_id','id');
    }
}
