<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $comment=$_POST['comment'];
    $to="prasaths1100@gmail.com,knmerpw@carbtc.net,ahireganesh323@gmail.com";
    $header="from:$name<$email>";
    $message="Name: $name \n\nEmail: $email \n\nContact No: $phone \n\nMessage: $comment";
   if(mail($to,$phone,$message,$header))
   {
       echo "Email sent";
   }
   else
   {
       echo "Error:please try again later";
   }
}
?>

                <form action="" method="post">
                        <lable class="lable_name">Name:</lable><br>

                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Name" required="required"> 
                        <br>
                        <lable class="lable_name">Email:</lable><br>

                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" required="required">
                        <br>
                        <lable class="lable_name">Phone Number:</lable><br>

                        <input type="number" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Phone Number" required="required">
                        <br>
                        <lable class="lable_name">Message:</lable><br>

                        <textarea class="form-control" rows="3" cols="78" id="comment" name="comment" required="required"></textarea>
                        <br>
                        <button type="submit" data-dismiss="modal" name="submit" class="btn btn-default submit_buttonnew">Submit</button>
                    </form>



<!-- second code for mail -->

  <html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
        $to = "knmerpw@carbtc.net";
         $subject  = "This is subject";
         
        $message  = "<b>Thank You.</b>";
         $message  .= "<h1>Course Completed Sucessfully.</h1>";
         
         $header  = "From:himansumangaraj@gmail.com \r\n";
         $header  .= "Cc:afgh@somedomain.com \r\n";
         $header  .= "MIME-Version: 1.0\r\n";
         $header  .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully <a href='https://www.google.co.in'>google</a>...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>