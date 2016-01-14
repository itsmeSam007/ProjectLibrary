@extends('layout.layout')
        @section('title')
		add new country
		@stop
		@section('style')
		@stop
		
		@section('body1')
		
		{!!Form::open(['url'=>'savecntry'])!!}
		<fieldset><legend>Add Country</legend>
		<p>
		
		{!!Form::label('country_name','Country Name')!!}
		{!!Form::text('country_name',null)!!}
		</p>
		
		
		
		
		
	
		
		</fieldset>
		
		{!!Form::submit('create')!!}
		
		{!!Form::close()!!}
		
		@stop