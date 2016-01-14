        @extends('layout.layout')
        @section('title')
		@stop
		
		
		
		@section('body1')
		<table>
        <tr>
		<th> id </th> 
		<th>name </th> 
		<th>email </th> 
		
		<th>address</th>
		<th>gender</th>
	    <th>edit</th>
		<th>delete</th>
		</tr>
		
		<?php 			
			foreach($user as $rs){
			?>
				<tr><td> <?php echo $rs->id; ?> </td>
				    <td> <?php echo $rs->name; ?> </td>
					<td> <?php echo $rs->email; ?> </td>
					
					<td> <?php echo $rs->address; ?> </td>
					
									
				    <td><?php echo ($rs->gender == 1)?"Male":"Female"; ?></td>
					 </td>
					 
					<td><a href="{{route('reg.edit',$rs->id)}}">EDIT</a> </td>
					<td>{!!Form::open(array('route' => ['reg.destroy',$rs->id], 'class'=>'form-horizental','method' =>'delete'))!!}
						{!!Form::hidden('id',$rs->id)!!}
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