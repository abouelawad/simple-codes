


 <p> Assignment 1</p>

<hr>


<?php

echo "<p>1- Days Translator </p><br/>";

$day="الاحد";

if ($day == "السبت") {
 echo "Saturday<br/>";
}else if ($day == "الاحد") {
 echo "Sunday<br/>";
}else if ($day == "الاثنين") {
 echo "Monday<br/>";
}else if ($day == "الثلاثاء") {
 echo "Tuseday<br/>";
}else if ($day == "الاربعاء") {
 echo "Wednesday<br/>";
}else if ($day == "الخميس") {
 echo "Thurusday<br/>";
}else if ($day == "الجمعة") {
 echo "Friday<br/>";
} else {
 echo "Not A Day<br/>";
}

echo "<hr/>";

//===============================

echo "<p>2-Login Page</p><br/>";

$userName="ahrmed";
$passWord="123";

echo "userName type is : ".gettype($userName)."<br/>";
echo "passWord type is : ". gettype($passWord)."<br/>";

if($userName == "ahmed" && $passWord == "123"){
	echo "Access Approved <br/>";
}else {
	echo "Access Denied <br/>";
}

echo "<hr/>";

//===============================

echo "<p>3 - Tester</p><br/>";

$tester = false;


if(gettype($tester) == "string"){
	echo "Tester is a ".gettype($tester);
}else if (gettype($tester) == "boolean") {
//onther if for echo true or false
	echo "Tester is a ".gettype($tester);
	if($tester == true){
		echo " type <b>true</b>";
	}else{
		echo " type <b>false</b>";
	}
}else if (gettype($tester) == "integer") {
	echo "Tester is a ".gettype($tester);
	echo " with a value = ";
	echo $tester +5 ;
}elseif (gettype($tester) == "double") {
	echo "Tester is a ".gettype($tester);
	echo " with a value = ";
	echo $tester *7 ;

}else{
	echo "lef w erga3 tany";
}



echo "<hr/>";

//===============================

echo "<p>4 - movie</p><br/>";

$films = array("Fast", "Predestination", "Persuit", "Prestige");
$keyword = "Persudit";
$found = true;

for($i = 0 ; $i < count($films) ; $i++ ){
	if ($films[$i] == $keyword) {
		$found = true;
		break;
		
	 }else{
		// echo "no <br/>"; di kanet 3'alat !!!
		
	}
	
}

if ($found) {
	echo "yes";
}else{
	echo "no";
}

echo "<hr/>";

//===============================

echo "<p>5 - Counting </p><br/>";

$films=array("avatar","Prestige","avatar","Prestige");
$keyword="avatar";
$count=0;

foreach ($films as $film) {
	if ($film == $keyword) {

		$count ++ ;
	}
}
echo "Number of repating the movie avatar is ",$count,"<br/>" ;


echo "<hr/>";

//===============================

echo "<p>6 - reverse </p><br/>";

 
$films=array("avatar","Prestige","avatar","Prestige");

for ($i = count($films) -1 ; $i >= 0 ; $i--) { 
	echo $films[$i]." - ";
}

echo "<hr/>";

//===============================

echo "<p>7 - Boolean </p><br/>";

echo "<p>Solution with 'for' loop</p><br/>";

$tests=array(1,"abou",1.5,true,7,'s',false);

for ($i=0; $i < count($tests) ; $i++) { 
	
	if (gettype($tests[$i]) != 'boolean' ) {
		echo gettype($tests[$i]),"<br/>";
	}else{

		if ($tests[$i] != true){
		echo "<b>false</b><br/>";
		}else {
		echo "<b>true</b><br/>";
		}
	}
}


echo "<hr/>";

echo "<p>Solution with 'while' loop</p><br/>";


$tests=array(true,"abou",1.5,true,7,'s',false);

$i=0;
while ($i < count($tests)){ 
	
		if (gettype($tests[$i]) != 'boolean' ) {
			echo gettype($tests[$i]),"<br/>";
		}else{

			if ($tests[$i] != true){
			echo "<b>false</b><br/>";
			}else {
			echo "<b>true</b><br/>";
			}
		}

	$i++;
}

echo "<hr/>";

//===============================

echo "<p>8 - max </p><br/>";


$tests=array(5,4,9,3,1,7,5,8,6);

$i=0;

foreach ($tests as $v) {

	if($v > $i ){

	$i= $v;

	}
	
}
echo $i ;


echo "<hr/>";

//===============================

echo "<p>9 - Sum </p><br/>";



$tests=array(5,4,9,3,1,7,5,8,6);


$i=0;

foreach ($tests as $v) {
	$i += $v;
}
echo $i ;


echo "<hr/>";

//===============================

echo "<p>10 - average </p><br/>";


$tests=array(6,4,9,3,12,8,7);


$i=0;

foreach ($tests as $v) {
	$i += $v;
}
echo $i/count($tests) ;


echo "<hr/>";

//===============================

echo "<p>11 - sorting  </p><br/>";


$tests=array(6,4,9,3,12,8,7);
// $fisrt=$tests[0];
sort($tests); 
  
$arrlength = count($tests); 
for($i = 0; $i < $arrlength; $i++) { 
    echo $tests[$i]." - ";

    //want to solve the last DASH of 12
 
}

echo "<hr/>";

//===============================

echo "<p>12 - same values  </p><br/>";

$arr1=array('a','b','c','d');
$arr2=array('c','d','e','f');

for ($i=0; $i <count($arr1) ; $i++) { 
	for ($j=0 ; $j < count($arr2); $j++) { 
		if ($arr1[$i] == $arr2[$j]) {
			echo $arr1[$i];
		}
	}
}

echo  "<hr> <br>" ;

echo "<hr/>";
$tests=array(5,4,9,3,1,7,5,8,6);
echo count($tests)."<br>";
for ($i=0; $i < count($tests) ; $i++) { 
	for ($j=0; $j < count($tests) ; $j++) { 
		if($tests[$i] < $tests[$j]) {
			# newVar is temporary 
			$newVar   = $tests[$i]  ;
			$tests[$i] = $tests[$j] ;
			$tests[$j]   =  $newVar ;
		}
		
	}
	
}
for ($i=0; $i < count($tests); $i++) { 
	echo $tests[$i];
}
echo "<hr/>";
echo "<hr/>";


$arr1=array('a','b','c','d' ,'kk' , 'gr' , 'km');
$arr2=array('kk', 'c','gr','d','e','f');
$res = array();
for ($i=0; $i <count($arr1) ; $i++) { 
	for ($j=0 ; $j < count($arr2); $j++) { 
		if ($arr1[$i] == $arr2[$j]) {

			array_push($res,$arr1[$i] );
		}
	}
		
}

for ($k=0; $k <count($res) ; $k++) { 
		echo $res[$k];
	if($k != count($res)-1)
		echo " - ";
}

/*function dash($s){
	for ($k=0; $k <count($res) ; $k++) { 
		echo $res[$k];
	if($k != count($res)-1)
		echo " - ";
	}
}*/




?>
