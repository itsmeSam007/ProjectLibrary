<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    protected $table = 'city';
	
    protected $fillable = ['city_name','country_id','state_id'];
}
