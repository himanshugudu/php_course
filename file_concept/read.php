<!-- r	Open a file for read only. File pointer starts at the beginning of the file
w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	Creates a new file for write only. Returns FALSE and an error if file already exists
r+	Open a file for read/write. File pointer starts at the beginning of the file
w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
 -->




<?php
// $myTest = fopen("test.txt", "r") or die("Unable to open file!");
// echo fread($myTest,filesize("test.txt"));
// fclose($myTest);





   // $filename = "test.txt";
   //       $file = fopen( $filename, "r" );
         
   //       if( $file == false ) {
   //          echo ( "Error in opening file" );
   //          exit();
   //       }
         
   //       $filesize = filesize( $filename );
   //       $filetext = fread( $file, $filesize );
   //       fclose( $file );
         
   //       echo ( "File size : $filesize " );
   //       echo ( "<pre>$filetext</pre>" );
// touch('resume.doc'); //to creat the file
// unlink('resume.doc'); //to delete the file
// copy("resume.doc","monika-resume.doc");
// rename("resume.doc","monika-resume.doc");
// echo file_exists("monika-resume.doc");
// echo filesize("monika-resume.doc")." Bytes";
// echo "<br/>";
// echo realpath("monika-resume.doc");

// $data="Welcome to RTS";
 
// file_put_contents("output.txt",$data) or die('ERROR:Can not write file');
 
// echo "data written inside  this file";
 
$data="A fish out of water"; 
 
$fo=fopen("output.txt","w");
 
// echo $fo;
fwrite($fo,$data);
 

 
fclose($fo);
 
echo "Data written to file";


$arr=file('output.txt') or die('ERROR: cannot file file');
 
foreach($arr as $line)
 
{
 
echo $line;
 
} 
echo "</br>";
// $arr=file('https://www.edjio.com') or die('ERROR: cannot file file');
 
// foreach($arr as $line)
 
// {
 
// echo $line;
 
// }



if(isset($_POST['save']))

{

   $f=$_POST['file'];

   $ext=$_POST['ext'];

   $data=$_POST['data'];

   $file=$f.$ext;

   if(file_exists($file))

   {

   echo "<font color='red'>file already exists</font>";

   }

   else

   {

   $fo = fopen($file,"w");

   fwrite($fo,$data);

   echo "your data is saved";

   }

}
$str=file_get_contents('minika.pdf') or die('ERROR:cannot find the file');
 
echo $str;
?>

<form method="post">

enter your file<input type="text" name="file"/><br/>

choose your extension<select name="ext">
   <option value="">choose ur exten</option>
   <option>.txt</option>
   <option>.docs</option>
   <option>.pdf</option>
</select><br/>

Enter your contents<textarea rows="10" cols="30" name="data">

      <?php echo @$contents ; ?>

       </textarea><br/>

<input type="submit" value="Save" name="save"/>

</form> 
            

      