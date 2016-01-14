<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookIssueModel extends Model 
{
   protected $table='bookIssues';
   
   protected $fillable = ['bk_issue_user_id', 'user_book_id','status'];
   
   
   
  /*  public static function createOrUpdate($formatted_array) {
    $row = Model::find($formatted_array['id']);
    if ($row === null) {
        Model::create($formatted_array);
        Session::flash('footer_message', "CREATED");
    } else {
        $row->update($formatted_array);
        Session::flash('footer_message', "EXISITING");
    }
    $affected_row = Model::find($formatted_array['id']);
    return $affected_row;
} */
   
}
