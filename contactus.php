<?php

$insert = false;

if(isset($_POST['submit'])) {
  
   $server = "localhost";
   $username = "root";
   $password = "";
   $con = mysqli_connect($server, $username, $password);
   
    if(!$con) {
         die("connection to this db failed due to" . mysqli_connect_error());
    }
    
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $sql = "INSERT INTO `test`.`contact_page` (`name`, `email`, `sub`, `msg`) VALUES ('$name', '$email', '$subject', '$message');";
    
       if($con->query($sql) == true){
        //  echo "Successfully inserted";
         $insert = true;
        //  echo $insert;
       }
       
       else {
           echo "error";
       }
    
      $con->close();
      
} 

?>