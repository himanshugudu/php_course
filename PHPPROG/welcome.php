<!DOCTYPE html>
<html>

<body>

<?php
 echo "Hello world" ;
?>
 <?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo $txt;
var_dump ($txt);
var_dump ($x);
var_dump ($y);
?> 
<?php
$name = "Ravi ";
$profile = "PHP Developer";
$age = 25;
echo $name , $profile , $age, " years old";
$name = "Ravi ";
$ret =  print $name;
echo $ret;
?>

 <?php
echo strlen($profile); // outputs 12
?> 





<?php
$arr=array(array(10,11,12),array(20,21,22),array(31,32,33));
foreach($arr as $arr1)
{
	foreach($arr1 as $arr2)
	{
		echo $arr2;
	}
}
echo "<br/>";



$test_array1 = ["as"=>23,"ds"=>45,"hs"=>67,"ts"=>78];

foreach($test_array1 as $tdfat=>$adyta)
{
	
	
	echo $tdfat."<br/>";
	//echo $tdfat, $adyta."<br/>";
}
echo "<br/>";
$test_array = array(23,45,67,78);
// echo $test_array[3];
echo "<br/>";




if(isset($_REQUEST['submit']))
{
	$a = $_REQUEST['fname'];
	$b = $_REQUEST['lname'];
	$c = $_REQUEST['fullname'];
	echo str_replace($a , $b, $c);
}
else{
	echo "Not submit";
}

define("ssfss", "Welcome to W3Schools.com!");
echo ssfss;

?>

<script>
	alert("<?php echo $a ?>");
</script>

<form action="#"  method="get"  >

	<input type="text" name="fname">
	<input type="text" name="lname">
	<input type="text" name="fullname">
	<input type="submit" value="submit" name="submit">

</form>

<?php
 $country=array("ind"=>array("Lucknow","Rajasthan","Delhi"),
            "pak"=>array("Islamabad","Lahore"),
            "ch"=>array("ch1","ch2")
           );
 
if(isset($_GET['display']))
 
 {
 
 $get_country=$_GET['c'];
 
echo "City ";
 
 foreach($country as $country_key => $cname)
 
   {
 
     if($country_key==$get_country)
 
	   {
 
         echo "<select>";
 
       foreach($cname as $state)
 
         {
	 echo "<option>".$state."</option>";
 
	  }
 
	 echo "</select>"; 
 
           }
 
      }
 
 }
 
?>
 
<form method="get">
 
<select name="c">
 
<option value="ind">india</option>
 
<option value="pak">Pak</option>
 
<option value="ch">china</option>
 
</select>
 
<input type="submit" value="submit" name="display"/>
 
</form>


// This query used for puting data in the array

<?php
	if(isset($_REQUEST['array']))
	{
		$a=$_REQUEST['a'];
		$b=$_REQUEST['b'];
		$c=$_REQUEST['c'];
		$d=$_REQUEST['d'];
		$test_array_demo = array($a,$b,$c,$d);
		foreach($test_array_demo as $test_demo)
		{
			echo $test_demo;
		}
	}
?>
<form method="post">
	<input type="text" name="a">
	<input type="text" name="b">
	<input type="text" name="c">
	<input type="text" name="d">
	<input type="submit" value="submit" name="array"/>
</form>



</body>
</html>
