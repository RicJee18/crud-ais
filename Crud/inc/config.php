<?php
  $servername = "192.168.0.12";
  $username = "Server_employee";
  $password = "python";
  $dbname = "employee";
  
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
?>