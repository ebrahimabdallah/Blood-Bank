<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model 
{

    protected $table = 'governorates';
    public $timestamps = true;
    protected $fillable = array('name');

    public function City()
    {
        return $this->hasMany('App\Models\City');
    }

    public function Clients()
    {
        return $this->belongsToMany('App\Models\Clients');
    }

}