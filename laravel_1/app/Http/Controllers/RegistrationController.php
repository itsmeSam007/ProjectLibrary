<?php

namespace App\Http\Controllers;

use Input;
use Auth;
use Illuminate\Http\Request;
use App\BookModel;
use App\Registration;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Session;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
    public function index()
    {
        //$reg1=User::all();
		return view('registers.login');
		//echo "login page";
    }
	
	public function LoginSave(Request $request)
	{
		
	  $inputs = $request->all();		
		$validator = Validator::make($inputs, [
            'email' => 'required|email',
			'password' => 'required'			
        ]);

        if ($validator->fails()) {
            return redirect('reg')
                        ->withErrors($validator)
                        ->withInput();
        }
		else {
		// create our user data for the authentication
		 $userdata = array(
			'email'     => Input::get('email'),
			'password'  => Input::get('password')
		 );	
			if (Auth::attempt($userdata)){
				Session::put('User',Auth::user()->id);
				Session::put('admin_chk',Auth::user()->is_admin);
				if(Session::get('admin_chk') == 1){
					return view('registers.adminPanel');
					
				}else{
					return redirect('udetails');	
				}
		
				//$value = Session::get('User');
				
			}	
			else
				return Redirect('reg');
		}
			 
	}	
	
	public function getuserdetails(){
		
		if(Auth::guest()){		
			return Redirect('reg');
		}
		else{		
			
			Session::put('User',Auth::user()->id);		// ASSIGNING VALUE INTO SESSION VARIABLE(Variable Name : User)...................	
			$value = Session::get('User');		//	UTILIZING SESSION VALUE FROM SESSION VARIABLE ..................
			$currentuser = User::find($value);
			return view('registers.studentDetail')->with('user',$currentuser);
		
		}
	
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.create');return view('registers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		//
		
		if (Input::file('image')->isValid()) {
		  $destinationPath = base_path().'/public/images/';
		  $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
		  $fileName = rand(11111,99999).'.'.$extension; // renameing image
		  Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      /* 	Session::flash('success', 'Upload successfully'); 
		return Redirect::to('upload'); */
			if (Input::hasFile('image')) { 
				$user1= new User;
				$user1->name = $request->name;
				$user1->email = $request->email;
				$user1->password = bcrypt($request->password);
				$user1->address = $request->address;
				$user1->gender = $request->gender;
				$user1->image = $fileName;
				$user1->is_admin = 0;	
				$user1->save();
				return redirect('reg');
			}
		}	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	 
	public function ViewDetails()
	{
		//echo "hi";
		
		$reg1=User::all();
		return view('registers.show')->with('user',$reg1);
	}
	
	
	public function UploadImage()
	{
		
	}
	
	
	public function StudentProfile()
	{
		//echo "hi";
	}
	 
    public function show($id)
    {
        //$user1= Registration :: find($id);
		//return view('registers.show')->with('regs',$user1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reg2=User :: find($id);
		//$book=Book :: where('id',$id)->first();
		
		/* echo "<pre>";
		print_r($reg2);exit; */
		
        return view('registers.edit')->with('user',$reg2);
    }

	
	/* public function BookAvailable()
	{
		$bk1=BookModel::all();
		return view('registers.bookView')->with('book2',$bk1);
	} */
	
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	   //$input = $request->all();
	   
        $input = $request->all();
		$data =  User::findorfail($id);
		$data->  update($input);
		
		if (Input::hasFile('image')) { 	
		
			if (Input::file('image')->isValid()) {
				$destinationPath = base_path().'/public/images/';
				$extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
				$fileName = rand(11111,99999).'.'.$extension; // renameing image	

				$file_input = $request->image_name;	

				if($file_input){
					unlink(public_path('images/'.$file_input));	
				}

				Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

				$user1=User::find($id);
				$user1->name = $request->name;
				$user1->email = $request->email;
				//$user1->password = bcrypt($request->password);
				$user1->address = $request->address;
				$user1->gender = $request->gender;
				$user1->image = $fileName;
				$user1->save();
				
				
				
			
		
		
			}		
		
		}
		
		return redirect('udetails');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
		return redirect()->route('udetails');
		
		
    }
}
