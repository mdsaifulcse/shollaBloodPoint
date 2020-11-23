<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FounderMembers extends Model
{
    protected $table='founder_members';
    protected $fillable=['name','designation','photo','blood_group_id','status'];

    public function fmBloodGroup(){
        return $this->belongsTo(BloodGroup::class,'blood_group_id','id');
    }
}
