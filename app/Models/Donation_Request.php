<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation_Request extends Model 
{

    protected $table = 'donation_request';
    public $timestamps = true;
    protected $fillable = array('patient_name', 'patients_phone', 
    'hospital_name', 'bloode_type', 'patient_age', 'bages_num','address');

   

}
