  @extends('layout.layout')
        @section('title')
		@stop
		
		
		
		@section('body1')
		<table>
        <tr>
		
		<th>name</th>
		<th>Title </th> 
		<th>Author</th> 
		<th>Copies</th>
		<th>Accept</th>
		<th>Cancel</th>
		
		</tr>
		
		<?php 			
			foreach($user as $bus){
			?>
				<tr>
				 
				<td> <?php echo $bus->name; ?> </td>
				<td> <?php echo $bus->book_title; ?> </td>
				<td> <?php echo $bus->author_name; ?> </td>
				<td> <?php echo $bus->no_copies; ?> </td>
				
				<td><a href="{{URL('adminApt',$bus->bkIssue_id)}}"><?php
                if($bus ->status ==1) {echo "ACTIVE" ;} else {echo "ACCEPT_REQUEST";} ?></a> </td>
				
				<td><a href="{{URL('adminRej',$bus->bkIssue_id)}}"><?php
                if($bus ->status ==1) {echo "CANCEL_REQUEST" ;} else {echo "NO RESPONSE";} ?></a> </td>
				
				
				</tr>
                    
				
				<?php
			}
		?>		
		</table>
		
		
		
		
		


@stop
					
					
					 
					
					
			