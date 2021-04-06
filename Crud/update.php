<?php
include "./inc/config.php";

if(isset($_POST['update'])){

    $userid = $_POST['userid'];
    $fname= $_POST['fname'];
    $mname= $_POST['mname'];
    $lname= $_POST['lname'];
    $addr= $_POST['address'];
    $gender= $_POST['gender'];

    $sql = "UPDATE employee_profile SET `firstname` = '$fname' , `middlename` = '$mname', `lastname` = '$lname' ,`address` = '$addr', `gender` = '$gender' WHERE `id` = '$userid' ";
    
    if ($conn->query($sql) === TRUE) {
    
     header('location:index.php');

    }
    else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
   

}

?>