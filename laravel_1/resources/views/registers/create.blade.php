@extends('layout.layout')
        @section('title')
		create new user
		@stop
		@section('style')
		@stop
		
		@section('body1')
		
		{!!Form::open(['route'=>'reg.store','files'=>true])!!}
		<fieldset><legend>Personal</legend>
		<p>
		
		{!!Form::label('name','Name')!!}
		{!!Form::text('name',null)!!}
		</p>
		<p>
		
		
		{!!Form::label('email','Email')!!}
		{!!Form::text('email')!!}
		</p>
		<p>
		{!!Form::label('password','Password')!!}
		{!!Form::password('password')!!}
		</p>
		<p>
		
		{!!Form::label('address','Address')!!}
		{!!Form::text('address')!!}
		</p>
		<p>
		<div class="control-group">
				<label class="control-label" for="input01">Gender</label>
				  <div class="controls">
					<select name="gender" id="gender" >
						<option value="">Gender</option>
						<option value="1">Male</option>
						<option value="2">Female</option>
						<option value="3">Other</option>
								   
					</select>
				   
				  </div>
			
			</div>
		</p>
		
		
		<div class="control-group">
				<label class="control-label" for="input01">Upload Image</label>
				  <div class="controls">
					<input type="file" class="input-xlarge" id="image" name="image" rel="popover" >
				   
				  </div>
			</div>
		
		</fieldset>
		
		{!!Form::submit('create')!!}
		
		{!!Form::close()!!}
		
		@stop