

<!-- //Note: You can not access any property of the class without their object -->
<?php

class demo
{
	function add($x, $y)

	{   
		
		$sum=$x+$y;
		echo "sum of given no=".$sum."<br/>";
	}

	// function sub()

	// {
	// 	$x=1000;
	// 	$y=500;
	// 	$sub=$x-$y;
	// 	echo "Sub of given no=".$sub;	
	// }

}
$obj=new demo();
$obj->add(10,20);
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
//Using Parametrized method
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
//dynamic program using oops(Numbers entered by user)
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