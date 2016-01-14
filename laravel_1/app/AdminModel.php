<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
     protected $table='bookIssues';
   
     protected $fillable = ['bk_issue_user_id', 'user_book_id','status'];
}
