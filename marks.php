<?php

	$marks = array(35,50,55,40,45,33,44,47,49,33,38,41,51,58,59,60,53,52);
	$sum=0;


	for ($i=0, $len=count($marks); $i<$len; $i++){
      if ($marks[$i]>=35) {
       $sum=$sum+$marks[$i];
      }
		
	}

	$avg=$sum/$len;
	echo "Average of Marks : ".$avg."<br>";

	$max = $marks[0]; 
   for ($i = 1; $i < $len; $i++) { 
       if ($max < $marks[$i]) 
           $max = $marks[$i]; 
   }    
    

    $min = $marks[0]; 
   for ($i = 1; $i < $len; $i++) { 
       if ($min > $marks[$i]) 
           $min = $marks[$i]; 
  }

  echo "Highest marks out of 60 : ".$max."<br>";
  echo "Lowest marks out of 60 : ".$min;

?>