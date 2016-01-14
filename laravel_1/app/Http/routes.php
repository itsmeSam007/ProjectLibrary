<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function () {


Route::get('/', function () {
	return view('welcome');
});






Route::get('/arpita', function () {
    return view('test1');
});





/* Route::get('photo/getAbout', [
    'as' => 'sourav', 'uses' => 'PhotoController@getAbout'
]); */

Route::get('pages', 'PagesController@getAbout');


Route::get('pages1', 'PagesController@getContact');

//Route::get('index', 'PagesController@getIndex');

//Route::get('contact', 'PagesController@getContact');

//Route::get('tst1', 'Test1Controller@show');
//Route::get('tst2', 'Test1Controller@view');

//Route::get('student', 'Test2Controller@stdForm');

//Route::get('log', 'Test2Controller@login');



Route::resource('book', 'BookController');



Route::resource('reg', 'RegistrationController');

Route::post('reg1', 'RegistrationController@LoginSave');

Route::get('udetails','RegistrationController@getuserdetails');

//Route::get('pfl', 'RegistrationController@Profile');

Route::get('vd', 'RegistrationController@ViewDetails');

Route::get('sp', 'RegistrationController@StudentProfile');

Route::resource('bk', 'BookController');

Route::get('bookavl','BookController@BookAvailable');

Route::get('bookrequest/{id}','BookIssueController@bookRequest');

Route::get('bissue','BookIssueController@issueView');

Route::get('bk1','BookController@adminBook');

Route::get('adminStatus','AdminController@statusView');



Route::get('adminApt/{id}','AdminController@adminAccept');

Route::get('adminRej/{id}','AdminController@adminReject');

Route::get('cntry','AdminController@addCountry');

Route::post('savecntry','AdminController@saveCountry');


Route::get('st','AdminController@addState');
Route::post('saveSt','AdminController@savestate');


Route::get('city','AdminController@addCity');


//Route::get('bkavl', 'RegistrationController@BookAvailable');



//Route::get('bk', 'BookController');


/*  ......... FOR LOGIN FUNCTON ............ */

Route::get('home',function(){
	if(Auth::guest()){
		
		/*
		Session::flush(); 
		$value = Session::get('User');
		return redirect('/');//->route('auth/login');
		*/
		//echo "without login";exit;
	}
	else{
		//echo "with login";exit;
		//Auth::user()->id;exit;
		Session::put('User',Auth::user()->id);
		
		$value = Session::get('User');
		$value = session('User');
		
		return redirect()->action('Registration@index');
	}
});

/*  ......... FOR LOGIN FUNCTON ............ */



// Authentication routes...
/*
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('login', ['as'=>'login','uses'=>'Auth\AuthController@postLogin']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route::resource('reg1', 'RegistrationController@show');



/* 	LOGIN AND REGISTRATION WORK ROUTING	*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('login', ['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);

/* 	LOGIN AND REGISTRATION WORK ROUTING	*/





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::group(['middleware' => ['web']], function () {
    //
//});


    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
