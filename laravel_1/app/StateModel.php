<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StateModel extends Model
{
     protected $table = 'state';
	
    protected $fillable = ['country_id','state_name'];
}
