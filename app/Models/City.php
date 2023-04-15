<?php

namespace App\Models;
use App\Models\Governorate;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $table = 'cities';
    public $timestamps = true;
    protected $fillable = array('name', 'governorate_id');

    public function clients()
    {
        return $this->hasMany('App/Model\Clients');
    }

    public function Governorate()
    {
        return $this->belongsTo('App/Models\Governorate');
    }

    public function cities()
    {
        return $this->hasMany('App/Models\Donation_Request');
    }

}
