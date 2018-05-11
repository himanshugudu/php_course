<?php
	// class Tv{
	// 	protected $model ="abc";
	// 	protected $volume =0;
	// 	function VolumeUp()
	// 	{
	// 		$this->volume++;
	// 	}
	// 	function VolumeDown()
	// 	{
	// 		$this->volume--;
	// 	}

	// }
	
	// $tv_one = new Tv;
	// // $tv_two = new TV;
	// echo $tv_one->volume ."<br/>";
	// // echo $tv_one->model;
	// $tv_one->VolumeUp();
	// echo $tv_one->volume;

	
?>
 <!-- constructer function -->

 <?php
// j
?>


<?php

Class demo
{ 
		
	Public $first;
	Public $second;	
	function __construct($a,$b)
	{
	$this->first=$a;
	$this->second=$b;
	}		
	function add()
	{
	$add=$this->first+$this->second;
	echo "sum of given no=".$add;
	}
}
if(isset($_POST['submit']))
	{
		$obj= new demo($_POST['x'],$_POST['y']);
		$obj->add();
	}
?>
<form method="post">
	enter your first number<input type="text" name="x"/><br/>
	enter your second number<input type="text" name="y"/><br/>
	<input type="submit" name="submit" value="+"/>
</form>


<!-- multiple inheritance -->
<?php
// class BaseClass
// {
// 	function add()
// 	{
// 		$x=1000;
// 		$y=500;
// 		$add=$x+$y;
// 		echo "Addition=".$add."<br/>";
// 	}
// }
// class chld extends BaseClass
// {
// 	function sub()
// 	{
// 		$x=1000;
// 		$y=500;
// 		$sub=$x-$y;
// 		echo "subtraction=".$sub."<br/>";
//  	}
// }
// class Nestedchld extends chld
// {
// 	function mult()
// 	{
// 		$x=1000;
// 		$y=500;
// 		$mult=$x*$y;
// 		echo "multiplication=".$mult."<br/>";
// 	}
// }
// class show extends Nestedchld
// {
// 	function __construct()
// 	{
// 		parent::add();
// 		parent::sub();
// 		parent::mult();
// 	}
// }	
// $obj= new show();
	
?>
<?php
// class person
// {
// var $name;
// var $address;
// var $phone;	
// 	function printPersonInf() 
// 	{
// 		echo $this->name;
// 		echo $this->address;
// 		echo $this->phone;
// 	}
// }
// class employee extends person
// {
// var $occupation;
// var $com_name;
// var $buss_phone;
// 	function printempInfo()
// 	{
// 		parent:: printPersonInf();
// 		echo $this->occupation;
// 		echo $this->com_name;
// 		echo $this->buss_phone;
// 	}
// }	
// $obj= new person();
// $emp=new employee();	
// echo $emp->name="Demo"."<br/>";
// echo $emp->address="bangalore"."<br/>";
// echo $emp->phone="7834571281"."<br/>";
// echo $emp->occupation="web developer"."<br/>";
// echo $emp->comp_name="Real Time Signal pvt ltd"."<br/>";
// echo $emp->buss_phone="910938909"."<br/>";
 
// ?>
// <?php
// class CommonParam
// {
// var $name;
// var $age;
// function commonInfo($name,$age)
// {
// echo 'Name = '.$this->name=$name;
// echo '
// Age = '.$this->age=$age;
// }
// }
// class EmpParam extends CommonParam
// {
// var $email;
// var $phone;
// function empInfo($x,$y,$p,$q)
// {
// parent::commonInfo($x,$y);
// echo '
// Email = '.$this->email=$p;
// echo '
// Phone = '.$this->phone=$q;
// }
// }
// $objemp=new EmpParam();
// //will pass the parameter valuewhile creating object
// $objemp->empInfo('Amit',26,'amittest@test.com',1234567890);
?>
<!-- Public Access -->
<!-- Public access modifier is open to use and access inside the class definition as well as outside the class definition. -->
<?php
// class demo
// {
// 	public $name="ravish";
// 	function disp()
// 	{
// 		echo $this->name."<br/>";
// 	}
// }
// class child extends demo
// {
// 	function show()
// 	{
// 		echo $this->name;
// 	}
// }	
// $obj= new child;
// echo $obj->name."<br/>";	
// $obj->disp();
// $obj->show();
?>
<!-- Protected access  -->
<!-- Protected is only accessible within the class in which it is defined and its parent or inherited classes. -->
<?php
// class demo
// {
// 	public $x=500;
// 	public $y=500;
// 	function add()
// 	{
// 	echo $sum=$this->x+$this->y."<br/>"; 
// 	}		
// }
// class child extends demo
// {
// 	public $x=70;
// 	public $y=50;
// 	function add()
// 	{
// 	echo $sub=$this->x+$this->y."<br/>";
// 	}
// }	
// $obj= new child;
// $obj->add();
// $obj->sub();
?>
<!-- Private access modifier -->
<!-- Private is only accessible within the class that defines it.( it can’t be access outside the class means in inherited class). -->
<?php

// class demo
// {
// private $name="shashi";
// private function show()
// {
// echo "This is private method of parent class";
// }
// }	
// class child extends demo
// {
// function show1()
// {
// echo $this->name;
// }
// }	
// $obj= new child;
// $obj->show();
// $obj->show1();
// ?>
// <?php
// class parents
// {  
// public $name="shashi";
// protected $profile="developer"; 
// private $salary=50000;
// public function show()
// {
// echo "Welcome : ".$this->name."<br/>";
// echo "Profile : ".$this->profile."<br/>";
// echo "Salary : ".$this->salary."<br/>";
// }
// }	
// class childs extends parents
// {
// public function show1()
// {
// echo "Welcome : ".$this->name."<br/>";
// echo "Profile : ".$this->profile."<br/>";
// echo "Salary : ".$this->salary."<br/>";
// }
// }	
// $obj= new childs;	
// $obj->show1();
?>
<!-- This word is can from Greek word poly and morphism.

Poly means “many” and morphism means property which help us to assign more than one property.

=> Overloading Same method name with different signature, since PHP doesn’t support method overloading concept

=> Overriding When same methods defined in parents and child class with same signature i.e know as method overriding -->
<?php

// class base
// {
// function add($a,$b)
// {
// $res=$a+$b;
// echo "Sum of two number = ".$res;
// }
// }
// class child extends base
// {
// function add($a,$b,$c)
// {
// res=$a+$b+$c;
// echo "Sum of three number = ".$res;
// }
// }
// $obj= new child();
// $obj->add(1000,500);

?>
<!-- Abstraction is a way of hiding information .

In abstraction there should be at least one method which must be declared but not defined.

The class that inherit this abstract class need to define that method.

There must be a abstract keyword that must be return before this class for it to be abstract class.

This class cannot be instantiated . only the class that implement the methods of abstract class can be instantiated.

There can be more than one methods that can left undefined. -->
<?php
// abstract class A
// {
// 	abstract function f1();
// 	function f2()
// 	{
// 		echo "hello";
// 	}
// }
// class B extends A
// {
// 	function f1()
// 	{
// 		echo "hi";
// 	}
// }
// $ob=new B();
// $ob->f1();
?>