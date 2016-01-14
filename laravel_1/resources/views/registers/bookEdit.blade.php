@extends('layout.layout')
@section('title')
        Edit book
@stop		
@section('body1') 
<div class="container">
	
		<div class="row">	
	
		  <div class="span8">
			

			<!-- <form class="form-horizontal" id="registerHere" method='post' action=''> -->
			{!! Form::model( $book, ['route' => ['bk.update', $book->id], 'method' => 'put', 'role' => 'form','files'=>true] ) !!}
			  <fieldset>
				<legend>Edit book</legend>
				<div class="control-group">
					<label class="control-label" for="input01">Book Title</label>
						<div class="controls">
							<input type="text" value="<?php echo $book->book_title; ?>" class="input-xlarge" id="title" name="book_title" rel="popover" data-content="Enter book title." data-original-title="book_title">
						</div>
				</div>
			
			<div class="control-group">
				<label class="control-label" for="input01">Author Name</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" value="<?php echo $book->author_name; ?>" id="authorName" name="author_name" rel="popover" data-content="Enter authorName" data-original-title="authorName">
				   
				  </div>
			</div>
			
			
			<div class="control-group">
				<label class="control-label" for="input01">No Copies</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" value="<?php echo $book->no_copies; ?>" id="copies" name="no_copies" rel="popover" data-content="Enter copies" data-original-title="copies">
				   
				  </div>
			</div>
			
		
			 <button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip">Update</button>
			
			
			   
			  </fieldset>
			  {!! Form::close() !!}
			<!-- </form> -->	
			</div>
	
		</div>
</div>    
@stop
