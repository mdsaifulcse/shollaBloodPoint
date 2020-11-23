<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $table='sub_menu';
    protected $fillable=['name','url','status','serial_num','fk_menu_id','slug'];

    public function subSubMenu(){
        return $this->hasMany(SubSubMenu::class,'fk_sub_menu_id','id');
    }
}
