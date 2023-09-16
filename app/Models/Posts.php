<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model 
{

    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('created','title', 'image', 'content', 'react');

   


}
