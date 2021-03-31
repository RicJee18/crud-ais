<?php

include "./inc/config.php";

if(isset($_GET['edit'])){
      $id = $_GET['id'];
      $fname= $_GET['fname'];
      $mname= $_GET['mname'];
      $lname= $_GET['lname'];
      $addr= $_GET['address'];
      $gender= $_GET['gender'];
      
      $result = $mysqli->query("SELECT * FROM employee_profile WHERE `id` = $id ")or die($mysqli->error());
      if(count($result)){
          
      }



}
// if(isset($_POST['update'])){

//       $userid = $_POST['userId'];
//       $fname= $_POST['fname'];
//       $mname= $_POST['mname'];
//       $lname= $_POST['lname'];
//       $addr= $_POST['address'];
//       $gender= $_POST['gender'];

//       $sql = "UPDATE employee_profile SET `firstname` = '$fname' , `middlename` = '$mname', `lastname` = '$lname' ,`address` = '$addr', `gender` = '$gender' WHERE `id` = '$userid' ";
      
//       if ($conn->query($sql) === TRUE) {
      
//        header('location:menu.php');
//       //include "menu.php";
  
//       }
//       else
//       {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//       }
     

// }




$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="bg-dark">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img style="height:280px; width:100%;" src="pic.jpg">
            <div class="w3-display-topleft w3-container w3-text-white">
              <h2>Lorem Ipsum</h2>  
            </div>
        </div>
        <div class="w3-container">
          <form method="post" action="update_save.php">
                    <h5><b>Update account</b></h5>
                    <!-- <input type="hidden" name ='userId' class="form-control"> -->
                    <div class="form-row">
                      <div class="form-group col-md-6">
                          <label  class="form-label">First Name</label>
                          <input type="text" name ='fname' class="form-control" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label  class="form-label">Middle Name</label>
                        <input type="text" name ='mname' class="form-control"  required>
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label  class="form-label">Last Name</label>
                        <input type="text" name ='lname' class="form-control"  required>
                      </div>
                    <div class="form-group col-md-6">
                        <label  class="form-label">Address</label>
                        <input type="text" name ='address' class="form-control"  required>
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label class="form-label">Gender</label>
                        <input type="text" name ='gender' class="form-control"  required>
                      </div>
                  </div>
                    <input type="submit"  class="btn btn-success " name ="update" value="Update">       
                    <br><br>
          
             </form>
         </div>
        </div>
       <br>


      <!-- End Left Column -->
  </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
          <br>

          <a href="deleteAll.php" class="btn btn-info float-right" >Delete All Data</a>
          <br>
          <br>
          <form>
          <input id="search" type="text" placeholder="Search data here..." class="form-control">
          </form>
          <br>
            
    

          <?php

          include "./inc/config.php";

          $result = $conn->query("SELECT * FROM employee_profile")or die($conn->error);

          ?>
             <div class="w3-card">
          
                  <table class="table  table-hover table-bordered" >
                              <thead >
                                  <tr style="height:50px; text-align:center;">
                                      <th scope="col">ID</th>
                                      <th scope="col">FIRSTNAME</th>
                                      <th scope="col">MIDDLENAME</th>
                                      <th scope="col">LASTNAME</th>
                                      <th scope="col">ADDRESS</th>
                                      <th scope="col">GENDER</th>
                                      <th scope="col">EDIT</th>
                                      <th scope="col">DELETE</th>

                                  </tr>
                              </thead>
                              <tbody id="myTable">
                                  <?php while ($row = $result ->fetch_assoc()): ?>
                                      <tr style="text-align:center;">
                                          <td> <?php echo $row['id'];?> </td>
                                          <td> <?php echo $row['firstname'];?> </td>
                                          <td> <?php echo $row['middlename'];?> </td>
                                          <td> <?php echo $row['lastname'];?> </td>
                                          <td> <?php echo $row['address'];?> </td>
                                          <td> <?php echo $row['gender'];?> </td>
                                          <td>
                                              <a class="btn btn-success" href="update_save.php?update_id=<?php echo $row['id'];?>">
                                              Update 
                                              </a>
                                          </td>
                                          <td>
                                              <a class="btn btn-danger" href="delete_save.php?del_id=<?php echo $row['id'];?>">
                                              Delete  
                                              </a>
                                          </td>
                                          
                                      </tr>    
                                  <?php endwhile; ?>
                              
                              </tbody>
                  </table>

            </div>

      
     </div>
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>


</body>
</html>


  