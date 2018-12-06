<?php
// include 'db.php';
// $name=$_POST ['name'];
// $address=$_POST['address'];
// $mobile=$_POST['mobile'];
// $email=$_POST['email'];
// function Test(){
// 	global $connection,$name, $address,$mobile,$email;
// 	if(isset($_POST['submit']))
// 	{
// 	$query="INSERT INTO brock (name,address,mobile,email) values('$name','$address','$mobile','$email')";
// 	$result=mysqli_query($connection,$query);
// 	echo $name ."<br>";
// 	echo $address ."<br>";
// 	echo $mobile ."<br>";
// 	echo $email ."<br>";
// 	}
// }
// Test();

	
 
error_reporting(1);
 
$arr=array(array(10,10,10),array(10,20,10),array(10,10,10),array(10,10,30));
 
$s=0;
 

//using for loop:
 
foreach($arr as $test)
 
{
	foreach($test as $value)
	{
		echo $value." ";
	}
 
	echo "<br/>";
 
}
 
echo "sum of array:".$s;

 
 $country=array("kar"=>array("Bangalore","mangalore","hubli"),
            "ap"=>array("Vishakhapatnam","tirupati"),
            "od"=>array("rourkela","Bhubaneswar")
           );
 
if(isset($_GET['display']))
 
 {
 
 $get_country=$_GET['c'];
 echo $get_country;
 
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
 
<option value="kar">Karnataka</option>
 
<option value="Ap">Andrapradesh</option>
 
<option value="od">Odisha</option>
 
</select>
 
<input type="submit" value="submit" name="display"/>
 
</form> 

	
	
<?php
$arr1 = array ( 
			 array ( "ques_no" => 1 ,"quiz_name" => "Demo","ques_num" => 
					array ( 
							array ( "quiz_no" => 1 ,"quiz_ans" => "test","quiz_ryt_ans" => false ),
							array ( "quiz_no" => 1 ,"quiz_ans" => "test1","quiz_ryt_ans" => true ), 
							array ( "quiz_no" => 1 ,"quiz_ans" => "test2","quiz_ryt_ans" => false ), 
							array ( "quiz_no" => 1 ,"quiz_ans" => "test3","quiz_ryt_ans" => false ) 
							) 
				) 
			);
		$dat1 = array();
        foreach ($arr1 as $test13) {
         foreach($test13 as $val)
				{
					echo $val."<br/>";
					foreach($val as $val3)
					{
						foreach($val3 as $val5)
							{
								echo $val5."<br/>";
							}
					}
				}

        }
        echo "<h1>".$dat1."</h1>";
$arr=array(array("karnataka"=>"banglore","andhrapradesh"=>"vizag"),
           array("karnataka"=>"manglore","andhrapradesh"=>"nellore"),
		   array("karnataka"=>"mysore","andhrapradesh"=>"chittoor"));
	foreach($arr as $test)
	{
	foreach($test as $val)
	{
		echo $val." ";
	}
	echo "<br/>";
	}

echo "-------------Multi dimentional Array------<br/>";
    $country=array("pak"=>"pakistan","ind"=>array("br"=>"bihar","dl"=>array("Nd"=>"North delhi","sd"=>"south delhi",
   "Ed"=>array("dwarka","uttam nagar"))));

    echo "---------count----------";
    $test2 = array_count_values($country);
    print_r($test2);
echo "<br/><br/>";
    print_r(array_change_key_case($country,CASE_UPPER));

      echo "<br/>";
    $abc = "Hello world";
    $test=explode(" ", $abc);

  print_r($test);
  echo "<br/>";
//    echo gettype($test);
//    echo "<br/>";
//  	$test1 = implode(" ", $test)."<br/>";

//  	echo gettype($test1);
// echo $country['ind']['dl']['sd']."<br/>";
// echo $country['ind']['dl']['Ed'][1]."<br/>";




$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'first_name');
print_r($last_names);

echo "<br/>";
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","b"=>"green","c"=>"blue");

// $result=array_diff_key($a1,$a2);
// print_r($result);

// $a1=array_fill(3,4,"blue");
// print_r($a1);



$keys=array("a","b","c","d");
print_r($keys);
echo "<br/>";
$a1=array_fill_keys($keys,"blue");
print_r($a1);
$a13=key($a1);

print_r($a13);



// function test_odd($var)
// {
// return($var & 7);
// }

// $a1=array("a","b",2,3,4);
// print_r(array_filter($a1,"test_odd"));

echo "<br/>";
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $result=array_flip($a1);
// print_r($result);


// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");

// $result=array_intersect($a1,$a2);
// print_r($result)


// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"red","b"=>"green","c"=>"blue");

// $result=array_intersect_assoc($a1,$a2);
// print_r($result);


// $a1=array("a"=>"red","b"=>"green","c"=>"blue");
// $a2=array("a"=>"red","c"=>"blue","d"=>"pink");

// $result=array_intersect_key($a1,$a2);
// print_r($result);


// $a=array("Volvo"=>"XC90","BMW"=>"X5");
// if (array_key_exists("Volvo",$a))
//   {
//   echo "Key exists!";
//   }
// else
//   {
//   echo "Key does not exist!";
//   }

// $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
// print_r(array_keys($a));

// function myfunction($v)
// {
//   return($v*$v);
// }

// $a=array(1,2,3,4,5);
// print_r(array_map("myfunction",$a));


// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"red","f"=>"green","g"=>"blue");
// $a3=array("h"=>"red","b"=>"green","g"=>"blue");

// $result=array_diff_assoc($a1,$a2,$a3);
// print_r($result);

?>