<?php
	$test = "& alpan";
	$test1 = 233;
	$test2 = 233.88;
	$test3 = false;
	$test4 = [];
	
	$test6 = $test2+$test1;
	echo "hello mudassar $test $test3";
	var_dump($test);
	var_dump($test1);
	var_dump($test2);
	var_dump($test3);
	var_dump($test4);
	var_dump($test5);
	var_dump($test6);




//class in php 

class demo

{

function add()

{   

$x=800;

$y=200;

$sum=$x+$y;

echo "sum of given no=".$sum."<br/>";

}

function sub()

{

$x=1000;

$y=500;

$sub=$x-$y;

echo "Sub of given no=".$sub;	

}

}

$obj= new demo();

$obj->add();

$obj->sub();



 
?>