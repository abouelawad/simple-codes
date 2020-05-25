
<?php
 function generateYears($start ,$end){

	echo "<select name = \"years\">";

	for ($i= $start ; $i <= $end ; $i++) { 
		echo "<option value='year'>" . $i . "</option>"."<br>";
	}
	echo "</select>";
}

generateYears("1900" , "2020") ."<br>";



echo"<hr>";


#this Example explaned in elzero web school


#the function and the logic for showing messages

function getTicket($user , $age){

	$ticket = rand(500 , 1000);

	if ($age > 28 ) {

		$msg = "you are welcomed Mr." . $user . "<br>";
		$msg .= "your age is " . $age . "<br>";
		$msg .= "your ticket ID is [ <span> " . $ticket ."</span>]" ;
		
	}else {

		$msg = "We are very sorry Mr. " .  $user . " your age is " . $age . "<br>";

		$msg .= " You Are Not Qualified To Get A ticket" ;
		$msg .= " SORRY :(" ;


	}

	return $msg;
}

$client = getTicket("khaled" , 18);


 function makeFrame($element){

	$frame  = "<div class= 'niceFrame'>";
	$frame .= $element;
	$frame .= "</div>";


	return $frame;

}


$myElement = makeFrame($client);


?>

<?php

// This code to train how to write a function with parameters

function familyName($fname, $year) {
    echo " $fname Born in $year <br>";
}

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");
?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Advanced function</title>
	<style >
		.niceFrame {
			padding: 10px;
			text-align : center;
			width: 400px;
			margin : 50px auto;
			border-radius: 10px;
			background-color: #eee;
			border:1px solid #ccc;
			font-family: Tahoma , Arial;
			line-height: 2em;
			color: green;

		}
		span {
			font-weight: lighter;
			color: red;
			font-family: sans-serif;  ;
		}

		
	</style>
</head>
<body>
	<?php

		// echo $id;
		echo $myElement;
	 ?>

</body>
</html>




