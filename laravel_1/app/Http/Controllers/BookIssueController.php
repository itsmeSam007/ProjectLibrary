<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BookIssueModel;
use Session;
use Auth;
//use App\User;
//use App\BookModel;
use DB;

class BookIssueController extends Controller
{
	
	public function bookRequest($id)
	{
		
		$value = Session::get('User');//user id who login
		Session::put('User_book_id',$id);//storing value in session variable
		
		 $data = DB::table('bookIssues')					 
						 ->where('bookIssues.user_book_id', '=', $id)
						 ->where('bookIssues.bk_issue_user_id', '=', $value)    	
						 ->get();
		
		if($data){
			//echo "already issued";
			return redirect('bissue');
		}
		else{
			$BkIssue= new BookIssueModel;
			$BkIssue->bk_issue_user_id = $value;//book id through hyperlink
			$BkIssue->user_book_id =$id;//user id
			$BkIssue->status=0;
			$BkIssue->save();		
			return redirect('bissue');
		}
		
	}
	
	public function issueView()
	{
		 
		 //exit;
		 $data = DB::table('bookIssues') 						
						 ->leftJoin('users',function($join){
						 $join->on('users.id', '=' , 'bookIssues.bk_issue_user_id');
        })
		                 ->leftJoin('books',function($join1){
							 $bk_id = Session::get('User_book_id');//user id who login
							$user_id = Session::get('User');//user id who login
						  $join1->on('books.id', '=' , 'bookIssues.user_book_id')
						// ->where('bookIssues.user_book_id', '=', $bk_id)
						 ->where('bookIssues.bk_issue_user_id', '=', $user_id);
        })		
		 ->get();
		
				 
		
		//dd($data);
		
	
	
		return view('registers.bookIssueView')->with('user',$data);
	}
	
    
}
