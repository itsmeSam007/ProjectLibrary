        @extends('layout.layout')
        @section('title')
		@stop
		
		
		
		@section('body1')
		<table>
        <tr>
		 
		<th>Title </th> 
		<th>Author</th> 
		<th>Copies</th>
		<th>Edit</th>
		<th>Delete</th>
		</tr>
		
		<?php 			
			foreach($book2 as $bks){
			?>
				<tr><td> <?php echo $bks->book_title; ?> </td>
				    <td> <?php echo $bks->author_name; ?> </td>
					<td> <?php echo $bks->no_copies; ?> </td>
					
					<td><a href="{{route('bk.edit',$bks->id)}}">EDIT</a> </td>
					<td>{!!Form::open(array('route' => ['bk.destroy',$bks->id], 'class'=>'form-horizental','method' =>'delete'))!!}
						{!!Form::hidden('id',$bks->id)!!}
						{!!Form::submit('Delete',['class' => 'btn btn-danger'])!!}
						{!!Form::close()!!}</td>
					
					
					</tr>
                    
				
				
				<?php
			}
		?>		
		</table>
		
		
		
		
		
		<p>
		
		
		
		
		</p>



@stop
					
					
					 
					
					
					
			