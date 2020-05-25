<?php

// calcuateor app

function doOperat($num1,$num2,$op){


	if ($op == "+") {

		return "the result is = " . ($num1 + $num2) ;
	
	} 	else if ($op == "-") {

		return "the result is = " . $num1 - $num2 ;
	
	} else if ($op == "/") {

		return "the result is = " . $num1 / $num2 ;
	
	} elseif ($op == "*") {

		return "the result is = " . $num1 * $num2 ;

	}


}


$result= doOperat(3,5,"/");

echo $result

?>
