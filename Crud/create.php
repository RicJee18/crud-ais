<?php

include "./inc/config.php";

if(isset($_POST['save'])){
    
  $fname= $_POST['fname'];
  $mname= $_POST['mname'];
  $lname= $_POST['lname'];
  $addr= $_POST['address'];
  $gender= $_POST['gender'];

 

  $sql = "INSERT INTO employee_profile (firstname,middlename,lastname,address,gender)
  VALUES ( '$fname','$mname','$lname','$addr','$gender')";

   if ($conn->query($sql) === TRUE) {
     header("location:index.php");
    //  include "menu.php";

   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
  }
 $conn->close();
?>