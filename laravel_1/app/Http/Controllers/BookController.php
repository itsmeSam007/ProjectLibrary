<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BookModel;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "book";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.bookAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		//dd($request);
                $book1= new BookModel;
				$book1->book_title = $request->book_title;
				$book1->author_name = $request->author_name;
				$book1->no_copies = $request->no_copies;
				$book1->save();
				return redirect('bk1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$bk1=BookModel::all();
		return view('registers.bookView')->with('book2',$bk1);
       
	}
	
	public function adminBook()
	{
		$bk1=BookModel::all();
		return view('registers.bookView1')->with('book2',$bk1);
	}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $books=BookModel :: find($id);
		//$book=Book :: where('id',$id)->first();
		
		/* echo "<pre>";
		print_r($reg2);exit; */
		
        return view('registers.bookEdit')->with('book',$books);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		        $input = $request->all();
		        $data =  BookModel::findorfail($id);
		        
				//print_r($input);exit();
				 $data->  update($input);
                //$book1=BookModel::find($id);
				//$book1->book_title = $request->book_title;
				//$book1->author_name = $request->author_name;
				//$user1->password = bcrypt($request->password);
				//$book1->no_copies = $request->no_copies;
				//$book1->save();
				
				//dd($request);
				
				
				return redirect('bk1');
    }
	
	

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BookModel::destroy($id);
		return redirect()->route('bk1');
    }
	
	public function BookAvailable()
	{
		$bk1=BookModel::all();
		return view('registers.bookView')->with('book2',$bk1);
	}
	
	 public function checkStatus()
	{
		$bk1=AdminModel::all();
		return view('registers.adminRequestView')->with('user',$bk1);
	}
	
}
