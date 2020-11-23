<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PresidentSpeech extends Model
{
    protected $table='president_speeches';
    protected $fillable=['title','url','photo','short','details','serial_num','status'];
}
