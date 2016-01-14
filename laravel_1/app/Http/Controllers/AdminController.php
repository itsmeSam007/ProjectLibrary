<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\BookIssueModel;
use App\CountryModel;
use App\StateModel;
use App\CityModel;
use Session;
use Auth;
use DB;

class AdminController extends Controller
{
	
		public function adminAccept($id)
	{
		$data = DB::table('bookIssues')
						->where('bkIssue_id',$id)
						->update(['status'=>1]);
						
						
		return redirect('adminStatus');
		
	} 
	
	
	
	
		public function adminReject($id)
	    
		{
		$data = DB::table('bookIssues')
						->where('bkIssue_id',$id)
						->update(['status'=>0]);
						
						
		return redirect('adminStatus');
		
	   } 
	
	
	
   public function statusView()
	{
		 
		 $data = DB::table('bookIssues') 						
						 ->leftJoin('users',function($join){
						 $join->on('users.id', '=' , 'bookIssues.bk_issue_user_id');
        })
		                 ->leftJoin('books',function($join1){							 
						  $join1->on('books.id', '=' , 'bookIssues.user_book_id');						
        })		
		 ->get();
		
				 
		
		//dd($data);
		
	
	
		return view('registers.adminRequestView')->with('user',$data);
	}
	
	
	public function addCountry()
	{
		$ct=CountryModel::all();
		return view('registers.countryAdd');
	}
	
	public function saveCountry(Request $request)
	{
		        $country2= new CountryModel;
				$country2->country_name = $request->country_name;
				$country2->save();
				return redirect('cntry');
    
	}
	
	
		
	
	public function addState()
	{
		//$c1=CountryModel::all();
		$c1 = CountryModel::lists('country_name', 'id'); 
        return view('registers.stateAdd')->with('cn2',$c1);
		
		
	}
	
	
	public function savestate(Request $request)
	{
		        $state1= new StateModel;
				$state1->country_id = $request->country_id;
				$state1->state_name = $request->state_name;
				$state1->save();
				return redirect('st');
    
	}
	
	public function addCity()
	{
		//$c1=CountryModel::all();
		//$c1 = CountryModel::lists('country_name', 'id'); 
        return view('registers.cityAdd');
		
		
	}
	
	

	
	
}
