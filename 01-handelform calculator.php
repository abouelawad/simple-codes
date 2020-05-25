
<?php

// //example 1

// // enter 1st number
// $num1 = $_GET["num1"];

// // enter operation

// $op = $_GET["op"];

// // enter 1st number

// $num2 = $_GET["num2"];

// if ($op == "+") {

// 	echo "the result is = " . ($num1 + $num2) ;
	
// } else if ($op == "-") {

// 	echo $num1 - $num2 ;
	
// } else if ($op == "/") {

// 	echo $num1 / $num2 ;
	
// } elseif ($op == "*") {

// 	echo $num1 * $num2 ;

// }


$name = $_POST["name"];
$num = $_POST["num"];

for($i=1 ; $i<= $num ;$i++ ){
	echo($name) . "<br>";
}






