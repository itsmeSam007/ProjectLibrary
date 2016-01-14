<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function getIndex()
	{
		return view('welcome');
	}
    public function getAbout(){
		$myname="hi";
		$status=false;
		$array=array("arpita" => 1,"rakesh" =>2,"binoy"=>3);
		return view('pages.about')
		->with("status1",$status)
		->with("name",$myname)
		->with("user",$array);
	}
	
	public function getContact()
	{
		return view('pages.contact');
	}
}
