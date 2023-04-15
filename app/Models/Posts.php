<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model 
{

    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('created','title', 'image', 'content', 'react');

   
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Category');
    }

}