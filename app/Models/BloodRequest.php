<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    protected $table='blood_requests';
    protected $fillable=['name','mobile','blood_group_id','amount','disease','patient_location','district_id','date_of_donation','message','status','manage_status'];

    public function requiredBloodGroup(){
        return $this->belongsTo(BloodGroup::class,'blood_group_id','id');
    }
    public function bloodRequiredDistrict(){
        return $this->belongsTo(District::class,'district_id','id');
    }
}
