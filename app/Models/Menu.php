<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menu';
    protected $fillable=['name','url','status','serial_num','slug','icon_class','type'];

    public function subMenu(){
        return $this->hasMany(SubMenu::class,'fk_menu_id','id');
    }
}
