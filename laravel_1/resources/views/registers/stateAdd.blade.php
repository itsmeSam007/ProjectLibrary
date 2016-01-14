@extends('layout.layout')
        @section('title')
		add new state
		@stop
		@section('style')
		@stop
		
		@section('body1')
		
		{!!Form::open(['url'=>'saveSt'])!!}
		<fieldset><legend>Add state</legend>
		
		<p>
		
		
		   {!!Form::label('country_id','country Name')!!}
		   {{ Form::select('country_id', $cn2) }}
		
		
		
		</p>
		
		<p>
		
		{!!Form::label('state_name','State Name')!!}
		{!!Form::text('state_name',null)!!}
		</p>
		
		
	
		
		</fieldset>
		
		
		{!!Form::submit('create')!!}
		{!!Form::close()!!}
		
		
		
		@stop