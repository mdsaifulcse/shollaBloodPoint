<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table ='members';
    protected $fillable=['user_id','father_name','gender', 'district_id','thana_upazila_id','union_id','village_id','blood_group_id','last_blood_donation','birthdate','facebook_id','photo','donation_status','member_type','status','created_by','updated_by'];
    protected $dates = ['created_at', 'updated_at', 'last_blood_donation'];

    public function userData(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function memberBloodGroup(){
        return $this->belongsTo(BloodGroup::class,'blood_group_id','id');
    }

    public function memberDistrict(){
        return $this->belongsTo(District::class,'district_id','id');
    }
    public function memberThanaUpazila(){
        return $this->belongsTo(ThanaUpazila::class,'thana_upazila_id','id');
    }

    public function memberUnion(){
        return $this->belongsTo(Union::class,'union_id','id');
    }
    public function memberVillage(){
        return $this->belongsTo(Village::class,'village_id','id');
    }
}
