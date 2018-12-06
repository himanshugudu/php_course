<?php
    $country=array("pak"=>"pakistan","ind"=>array("br"=>"bihar",
   "dl"=>array("Nd"=>"North delhi","sd"=>"south delhi",
   "Ed"=>array("dwarka","uttam nagar"))));

echo $country["ind"]["br"]."<br/>";

//echo $country["ind"]["Nd"]["sd"]."<br/>";

echo $country["ind"]["dl"]["Ed"][0];
 
?>

<?php
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
print_r($persons); 
echo "" ."<br/>"; 

"<br/>";
"<br/>";
echo "Mary is a " . $persons["Mary"]. "<br>";
?>

<?php
//$variable_name['key_name'] = value;

$variable_name = array('key_name' => 'value','Mirriam' => 'listk');



foreach($variable_name as $arrary_value){
	
echo $arrary_value. "<br>";

}


?>