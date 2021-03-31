<?php

include "./inc/config.php";

$sql = "TRUNCATE TABLE employee_profile";

if ($conn->query($sql) === TRUE) {
    include ("index.php");

  } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>