<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'Members';
    public $timestamps = true;
    protected $fillable = array('image','Name', 'phone', 'address','experince');

}
