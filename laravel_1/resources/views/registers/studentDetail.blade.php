@extends('layouts.app')
@section('content')	

<fieldset><legend>My Details</legend>
		<table>
        <tr>
		<th>id</th> 
		<th>name </th> 
		<th>email </th> 
		
		<th>address</th>
		<th>gender</th>
	    <th>edit</th>
		<th>delete</th>
		</tr>
		
	
		
		<?php 			
			//foreach($user as $rs){
			?>
				<tr><td> <?php echo $user->id; ?> </td>
				    <td> <?php echo $user->name; ?> </td>
					<td> <?php echo $user->email; ?> </td>
					
					<td> <?php echo $user->address; ?> </td>
					
									
				    <td><?php echo ($user->gender == 1)?"Male":"Female"; ?></td>
					 </td>
					 
					<td><a href="{{route('reg.edit',$user->id)}}">EDIT</a> </td>
					<td>{!!Form::open(array('route' => ['reg.destroy',$user->id], 'class'=>'form-horizental','method' =>'delete'))!!}
						{!!Form::hidden('id',$user->id)!!}
						{!!Form::submit('Delete',['class' => 'btn btn-danger'])!!}
						{!!Form::close()!!}</td>
						
						
						
						<div class="control-group" style="width:800px;height:128px;right:20px; position: absolute; ">
		
				<label class="control-label" for="input01">Profile Image</label>
				  <div class="controls">
					<img src="{{ URL::to('images') }}/<?php echo $user->image; ?>" class="thumb" alt="a picture" width="20%" height="60%">
				   
				  </div>
			</div></td>
					
			</tr>
			
			
			
                    
				
				
				<?php
			//}
		?>		
		</table>
		
		
		
		
		   
			
			
			
			
			<div>
		<td><a href="bookavl">Book Available</a> </td>
		</div>
		
		
		</fieldset>
		
		
		
		
		@endsection