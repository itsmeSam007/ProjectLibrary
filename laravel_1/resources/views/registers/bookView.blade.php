        @extends('layout.layout')
        @section('title')
		@stop
		
		
		
		@section('body1')
		<table>
        <tr>
		 
		<th>Title </th> 
		<th>Author</th> 
		<th>Copies</th>
		<th>issue</th>
		</tr>
		
		<?php 			
			foreach($book2 as $bks){
			?>
				<tr><td> <?php echo $bks->book_title; ?> </td>
				    <td> <?php echo $bks->author_name; ?> </td>
					<td> <?php echo $bks->no_copies; ?> </td>
					
					<td><a href="{{URL('bookrequest',$bks->id)}}">request</a> </td>
					
					
					</tr>
                    
				
				
				<?php
			}
		?>		
		</table>
		
		
		
		
		
		<p>
		
		
		
		
		</p>



@stop
					
					
					 
					
					
					
			