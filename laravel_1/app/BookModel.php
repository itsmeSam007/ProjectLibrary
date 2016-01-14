<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
	
	protected $table = 'books';
	
    protected $fillable = ['book_title', 'author_name', 'no_copies'];
	
	
	
	
  protected $hidden = [
        'password', 'remember_token',
    ];
}







