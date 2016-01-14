@extends('layout.layout')
        @section('title')
		user login
		@stop
		@section('style')
		@stop
		
		@section('body1')
		
		{!!Form::open(['url'=>'reg1','method'=>'post'])!!}
		
		@if($errors->any())
				<ul class="alert alert-danger">
					@foreach($errors->all() as $error)
						<li>{!! $error !!}</li>
					@endforeach
				</ul>
			@endif
			
		<fieldset><legend>Login</legend>
		
		<p>
		
		
		{!!Form::label('email','Email')!!}
		{!!Form::text('email')!!}
		</p>
		<p>
		{!!Form::label('password','Password')!!}
		{!!Form::password('password')!!}
		</p>
		
		</fieldset>
		
		
		
		
		{!!Form::submit('login')!!}
		
		<div>
		<a href="{{route('reg.create')}}">New Registration</a> 
		</div>
		
		{!!Form::close()!!}
		
		@stop