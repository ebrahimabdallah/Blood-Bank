<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model 
{

    protected $table = 'Labs';
    public $timestamps = true;
    protected $fillable = array('Name', 'phone', 'address');

}