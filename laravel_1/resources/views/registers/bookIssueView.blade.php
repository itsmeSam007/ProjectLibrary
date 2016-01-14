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
		<th>Status</th>
		
		</tr>
		
		<?php 			
			foreach($user as $bus){
			?>
				<tr>
				<td> <?php echo $bus->name; ?> </td>
				<td> <?php echo $bus->book_title; ?> </td>
				<td> <?php echo $bus->author_name; ?> </td>
				<td> <?php echo $bus->no_copies; ?> </td>
				<td> <?php
                if($bus ->status ==1) {echo "ACTIVE" ;} else {echo "PENDING";} ?></td>
                  
				
					
					
					
					</tr>
                    
				
				<?php
			}
		?>		
		</table>
		
		
		
		
		
		<p>
		
		
		
		
		</p>



@stop
					
					
					 
					
					
					book status