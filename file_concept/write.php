<?php
// $myfile = fopen("test.txt", "w") or die("Unable to open file!");
// $txt = "shaan\n";
// fwrite($myfile, $txt);
// $txt = "Prashant\n";
// fwrite($myfile, $txt);
// fclose($myfile);
echo "Writting is done";
   $filename = "prashant.txt";
   $file = fopen( $filename, "w+" );
   
   if( $file == false ) {
      echo ( "Error in opening new file" );
      exit();
   }
   fwrite( $file, "This is  a simple test\n" );
   fclose( $file );
?>
<!-- <html>
   
   <head>
      <title>Writing a file using PHP</title>
   </head>
   
   <body>
       -->
      <?php
         // $filename = "test.txt";
         // $file = fopen( $filename, "r" );
         
         // if( $file == false ) {
         //    echo ( "Error in opening file" );
         //    exit();
         // }
         
         // $filesize = filesize( $filename );
         // $filetext = fread( $file, $filesize );
         
         // fclose( $file );
         
         // echo ( "File size : $filesize bytes" );
         // echo ( "$filetext" );
         // echo("file name: $filename");
      ?>
<!--       
   </body>
</html> -->