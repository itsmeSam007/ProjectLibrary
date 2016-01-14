
        @extends('layout.layout')
        @section('title')
		about
		@stop
		
       @section('body1')
	   <h1> ARPITA MONDAL </h1>
	
	<p><?php echo $name;?></p>
	<?php
	
	if($status1 === false){
		echo "hi mam";
		
	}
	else
	{
		echo "hi no mam"; 
	}
		?>
		
		<br>
		
		
		<br>
		
		
	      <?php
		  for ($i = 0; $i < 10; $i++){
            
			
			echo "The number is: $i <br>";
		  }

		  ?>
		  
		  <br>
		  
		  <?php
		  
		  //print_r ($user);
		  
		  foreach($user as $data)
		  {
			  echo $data;
		  }
		  ?>
          
        @stop
   
    
