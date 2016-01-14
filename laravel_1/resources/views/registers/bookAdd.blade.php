@extends('layout.layout')
        @section('title')
		create new book
		@stop
		@section('style')
		@stop
		
		@section('body1')
		
		{!!Form::open(['route'=>'bk.store','files'=>true])!!}
		<fieldset><legend>Add Book</legend>
		<p>
		
		{!!Form::label('book_title','Book Title')!!}
		{!!Form::text('book_title',null)!!}
		</p>
		<p>
		
		
		{!!Form::label('author_name','Author Name')!!}
		{!!Form::text('author_name')!!}
		</p>
		<p>
		{!!Form::label('no_copies','No Copies')!!}
		{!!Form::text('no_copies')!!}
		</p>
		
		
		
		
	
		
		</fieldset>
		
		{!!Form::submit('create')!!}
		
		{!!Form::close()!!}
		
		@stop