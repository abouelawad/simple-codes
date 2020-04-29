<?php 

#This application to count repeated odds

$arr = [20,1,-1,2,-2,3,6,3,18,5,5,1,2,4,20,4,-1,-2,5];

   $countedArray = array_count_values($arr);


   foreach ($countedArray as $key => $odd) {
   	
   	if ($odd%2 != 0) {
   	 	echo $key ."<br>" ;
   	 } 

   }




    



 ?>

