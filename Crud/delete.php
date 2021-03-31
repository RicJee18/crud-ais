<?php

include "./inc/config.php";

$id = $_GET["del_id"];

$sql = "DELETE FROM employee_profile WHERE `id` = '$id'";

if ($conn->query($sql) === TRUE) {

    include "index.php";

}
else
  {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>