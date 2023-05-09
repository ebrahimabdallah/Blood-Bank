<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donor extends Model 
{

    protected $table = 'Donors';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'phone', 'email', 'address', 
    'BloodType', 'age', 'LastDontation');

public function getPermissionsAttribute($permissions)
{
    return json_decode($permissions,true);
}
}