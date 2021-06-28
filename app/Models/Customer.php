<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
	use SoftDeletes;
    protected $table='customer';  
    protected $fillable=['first_name','last_name','gender','qualifications'];   
}
