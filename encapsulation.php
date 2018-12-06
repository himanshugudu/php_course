<?php
   // for($i=5;$i>=1;$i--)
   // {
     
   //     for($j=1;$j<$i;$j++)
   //     {
   //         echo "&nbsp;&nbsp;";
           
   //     }
   //     for($k=5;$k>=$i;$k--)
   //     {
   //     	echo "*";
   //     }
   //     echo "<br/>";
   // }
// $a = 10;
// $b = "10";
// if (!$a && $b){
// 	echo "true";
// }
// else{
// 	echo "false";
// }
	
// function test($c, $d)
// {
// 	echo $c+$d ."<br/>";
// 	echo $c-$d ."<br/>";
// 	if ($c==$d) {
// 		echo "true";
// 	}else{
// 		echo "false";
// 	}
// }
// test(30, 40);
?>
<?php
	// class A
	// {
	// 	public $a;
	// 	private $b =10;
	// 	function Test($a,$b)
	// 	{
	// 		echo $a+$b;
	// 	}
	// }
	// class B extends A{

	// }
	// $obj = new B;
	// echo $obj->Test(10,20);
?>
<?php  

// class Tv{
// 		protected $model ;
// 		public $volume ;
// 		function VolumeUp()
// 		{
// 			$this->volume++;
// 		}
// 		function VolumeDown()
// 		{
// 			$this->volume--;
// 		}
// 		function getModel()
// 		{
// 			return $this->model;
// 		}
// 		function __construct($m, $v)
// 		{
// 			$this->model = $m;
// 			$this->volume = $v;
// 		}

// 	}
	
// 	$tv = new TV('abc', 0);
// 	echo $tv->getModel();

	?>
	<!-- getter method only return the value -->
	<?php
	// class Tv{
	// 	private $model ;
	// 	public $volume ;
	// 	function VolumeUp()
	// 	{
	// 		$this->volume++;
	// 	}
	// 	function VolumeDown()
	// 	{
	// 		$this->volume--;
	// 	}
	// 	function getModel()
	// 	{
	// 		return $this->model;
	// 	}
	// 	function __construct($m, $v)
	// 	{
	// 		$this->model = $m;
	// 		$this->volume = $v;
	// 	}

	// }
	//  class chld extends Tv
	// 	{
	// 		function getModel()
	// 		{
	// 			return $this->model;
	// 		}
	// 	}
	// $tv = new chld('abc', 0);
	// echo $tv->getModel();

	?>
	<?php
	// class BaseEmployee{
	// 	protected $firstname;
	// 	protected $lastname;
	// 	public function getFullName()
	// 	{
	// 		return $this->firstname." ".$this->lastname;
	// 	}

	// 	public function __construct($f, $l)
	// 	{
	// 		$this->firstname = $f;
	// 		$this->lastname = $l;
	// 	}
	// }
	// class FulltimeEmployee extends BaseEmployee{
	// 	protected $annualsalary;
	// 	public function getMonthlySalary()
	// 	{
	// 		return $this->annualsalary/12;
	// 	}
	// }
	// class ContractEmployee extends BaseEmployee{
	// 	protected $hourlyRate;
	// 	protected $totalHours;
	// 	public function getMonthlySalary()
	// 	{
	// 		return $this->hourlyRate * $this->totalHours;
	// 	}
	// }
	// $fulltime = new FulltimeEmployee('fulltime', 'Employee');
	// $contract = new ContractEmployee('Contract', 'Employee');
	// echo $fulltime->getFullName();
	?>
	<!-- we can not able to create object class directly in abstract -->
	<?php
	class BaseEmployee{
		protected $firstname;
		protected $lastname;
		public function getFullName()
		{
			return $this->firstname." ".$this->lastname;
		}
		public abstract function getMonthlySalary();
		public function __construct($f, $l)
		{
			$this->firstname = $f;
			$this->lastname = $l;
		}
	}
	class FulltimeEmployee extends BaseEmployee{
		protected $annualsalary;
		public function getMonthlySalary()
		{
			return $this->annualsalary/12;
		}
	}
	class ContractEmployee extends BaseEmployee{
		protected $hourlyRate;
		protected $totalHours;
		public function getMonthlySalary()
		{
			return $this->hourlyRate * $this->totalHours;
		}
	}
	$fulltime = new FulltimeEmployee('fulltime', 'Employee');
	$contract = new ContractEmployee('Contract', 'Employee');

	echo $fulltime->getFullName();
	echo $contract->getFullName();
	?>
	<!-- interface is same like abstract is support multiple class -->
	<!-- in interface i can not declear variable -->
	<!-- also i canot declear private property in the class -->
	<!-- in interface cannot create construct function -->
	<?php
	// interface test{
	// 	public function demo();
	// }
	// interface test1{
	// 	public function demo2();
	// }
	// class test2 implements test,test1{
	// 	public function demo(){
	// 		echo "demo";
	// 	}
	// 	public function demo2()
	// 	{
	// 		echo "demo2";
	// 	}
	// }
	// $t = new test2;
	// echo $t->demo();
	// echo "<br/>";
	// echo $t->demo2();
	?>
	<?php
	// interface test{
	// 	public function demo();
		
	// }
	// interface test2{
		
	// 	public function demo2();
	// }
	// class test1 implements test,test2{
	// 	public function demo(){
	// 		echo "demo";
	// 	}
	// 	public function demo2()
	// 	{
	// 		echo "demo2";
	// 	}
	// }
	// $t = new test1;
	// echo $t->demo2();
	?>
	<?php
	// abstract class abc{
	// 	public $data;
	// }
	// interface test{
	// 	public function demo();
		
	// }
	// interface test2{
		
	// 	public function demo2();
	// }
	// class test1 implements test,test2{
	// 	public function demo(){
	// 		echo "demo";
	// 	}
	// 	public function demo2()
	// 	{
	// 		echo "demo2";
	// 	}
	// }
	// $t = new test1;
	// echo $t->demo2();
	// ?>