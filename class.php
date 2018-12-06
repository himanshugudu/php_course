
<?php
// $arrayName = array(10,20,30,40);
// echo $arrayName[3];


	
// $arr[0]=10;

// $arr[1]=20;

// $arr[2]=30;

// $arr[5]=40;

// $arr[4]=50;

// echo $arr[3]; 

// function Test()
// {   
// 	$col=array("blue","red","green","white","pink","Uttam");	
		
// 	for($i=0;$i<count($col);$i++)
		 
// 	 {
		   
// 	echo $col[$i]."<br/> ";
		  
// 	}		
// }   
// Test();




	
$arr=array(10,11,12,13,14,15);
	

	foreach ($arr as $value) {
		echo $value."<br/>";
	}
// for($i=0;$i<count($arr);$i++)
	
// {
	  
// if($arr[$i]%2==0)
	   
// {	
	    
// echo $arr[$i]."<br/>";
           
// }
	  
// else
	   
// {
	   
//  echo $arr[$i]."<br/>";
            
// }		
	
// }


 // $state=array("Monika"=>"AndraPradesh","Uttam"=>"Maharastra","Himanshu"=>"Odisha","Rishab"=>"Bihar");	
    
//  foreach($state as $val)

//        {

// 	echo $val."<br/> ";

//        }
// foreach($state as $key=>$val)
 
// {
 
// echo $key."---".$val."<br/>";
 
// }
// echo "Sum of even=".$even."<br/>";		
	
// echo "Sum of odd=".$odd;			
   

 
// $sum=0;
	
// $arr=array(10,20,30,40,50);
	
// for($i=0;$i<count($arr);$i++)
	
// {
	
// echo $arr[$i]."<br/>";
	
// }
        
// echo "Sum of given array = ".$sum;


	// class A
	// {
	// 	public $c = 10;
	// 	function Test()
	// 	{
	// 		$show = $this->c;
	// 		echo  $show ;
	// 	}
	// }
	// $demo = new A;
	// $demo->Test();
?>
<!-- //Note: You can not access any property of the class without their object -->
<?php

// class demo
// {
// 	function add($x, $y)

// 	{   
		
// 		$sum=$x+$y;
// 		echo "sum of given no=".$sum."<br/>";
// 	}

	// function sub()

	// {
	// 	$x=1000;
	// 	$y=500;
	// 	$sub=$x-$y;
	// 	echo "Sub of given no=".$sub;	
	// }

// }
// $obj=new demo();
// $obj->add(10,20);
// $obj->sub();
?>
<?php

// class demo

// {

// var   $msg="welcome";

// function test()

// {   

// echo  "Users";    	

//  }
	
// }

// $obj= new demo();

// echo  $obj->msg;

// $obj->test();
 
?>
<!-- //Using Parametrized method -->
<?php
	
// class demo
// {
// function add($a,$b)
// {   

// $sum=$a+$b;

// echo "Sum=".$sum."<br/>";	

// }

// function sub($x,$y)

// {

// $sub=$x-$y;

// echo "Subtraction=".$sub;	

// }

// }

// $obj= new demo();

// $obj->add(800,200);

// $obj->sub(1000,500);
  
?>
<!-- //dynamic program using oops(Numbers entered by user) -->
<?php

// class demo

// {

// function add($a,$b)

// {   

// $sum=$a+$b;

// echo "Sum=".$sum."<br/>";	

// }

// function sub($x,$y)

// {

// $sub=$x-$y;

// echo "Subtraction=".$sub;	

// }

// }

// $obj= new demo();

// $obj->add($_GET['f'],$_GET['s']);

// $obj->sub($_GET['f'],$_GET['s']);

?>
  
<!-- <form>

Enter first number<input type="text" name="f"/><hr/>

Enter second number<input type="text" name="s"/><hr/>

<input type="submit" value="Show result"/>

</form> -->