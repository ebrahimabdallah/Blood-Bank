<?php

namespace App\Models;
use App\Models\Governorate;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $table = 'cities';
    public $timestamps = true;
    protected $fillable = array('name', 'governorate_id');
 
 
 

}
