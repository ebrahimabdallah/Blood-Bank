<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donor extends Model 
{
    use SoftDeletes;

    protected $table = 'donor';
    public $timestamps = true;
    protected $fillable = array('name','phone','password', 'Birth_data', 'blood', 'pin_code', 'email','city_id');

}