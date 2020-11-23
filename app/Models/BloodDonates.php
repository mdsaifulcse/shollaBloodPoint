<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class BloodDonates extends Model
{
    protected $table ='blood_donates';
    protected $fillable=['user_id','last_blood_donation','patient_name','patient_diseases','patient_mobile','hospital','number_of_donation','status'];

    public function userData(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
