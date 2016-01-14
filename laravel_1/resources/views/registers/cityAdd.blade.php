@extends('layout.layout')
        @section('title')
		add new city
		@stop
		@section('style')
		@stop
		
		@section('body1')
		
		
	
		
		<p>
		
		{!!Form::label('city_name','City Name')!!}
		{!!Form::text('city_name',null)!!}
		</p>
		
		
	
		
		</fieldset>
		
		
		{!!Form::submit('create')!!}
		
		
		
		
		@stop