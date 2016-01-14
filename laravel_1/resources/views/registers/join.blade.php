<th>gender</th>
		<th>photo</th>
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
					 
					
					
					
			</tr>
                    
				<div>
				
				 
				 
				</div>
				
				
				<?php
			}
		?>		
		
</table>

@stop