<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
     
	 
	 protected $table='registration';
	 
	 protected $fillable = [
        'name', 'email', 'password','image'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
