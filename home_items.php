

<?php

$total = 0;

$devices = [

   ['item' => 'talaga sharp' , 'price' => 6500 , 'link' => 'sdsfbs'],

   ['item' => 'botagaz zanosi' , 'price' => 4000 , 'link' => 'sdsfbs'],

     ['item' => '3\'asala samsung' , 'price' => 7500 , 'link' => 'sdsfbs'],

 ['item' => 'sa7\'an' , 'price' => 2000 , 'link' => 'sdsfbs'],
 ['item' => 'mixer' , 'price' => 1000 , 'link' => 'sdsfbs'],
['item' => 'sitting' , 'price' => 13000 , 'link' => 'sdsfbs'],
['item' => 'bed room' , 'price' => 30000 , 'link' => 'sdsfbs'],



    
];


echo "<pre>";
print_r($devices);
echo "<pre>";

foreach ($devices as $key => $device) {
	
	$total += $device['price'];
}
	echo "$total";



