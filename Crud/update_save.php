<?php

include "./inc/config.php";

// if(count($_POST) > 0) {
//   mysqli_query($conn,"UPDATE employee_profile set firstname='" . $_POST['firstname'] . "', middlename='" . $_POST['middlename'] . "', lastname='" . $_POST['lastname'] . "',  address ='" . $_POST['address'] . "', gender ='" . $_POST['gender'] . "' WHERE id ='" . $_GET['userid'] . "'");
//   echo "Record Modified Successfully";
//   }
$result = mysqli_query($conn,"SELECT * FROM employee_profile WHERE id='" . $_GET['update_id'] . "'");
$row = mysqli_fetch_assoc($result);


// if(isset($_GET['update_id'])){
//       $id = $_GET['update_id']; 
//       $update = true; 
//       $result = $conn->query("SELECT * FROM employee_profile WHERE `id` = $id ")or die($conn->error());
//       if(count($result) == 1){
//           $row = $result->fetch_assoc();
//           $fname = $row['fname'];
//           $mname = $row['mname'];
//           $lname = $row['lname'];
//           $addr = $row['address'];
//           $gender = $row['gender'];
//       }



// }
?>
<?php
include "./inc/header.php";
?>
<body class="bg-dark">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="./img/pic.jpg" class="d-block w-100" alt="..." height ="320">
                      </div>
                      <div class="carousel-item">
                        <img src="./img/vic.jpg" class="d-block w-100 " alt="..."  height ="320">
                      </div>
                      <div class="carousel-item">
                        <img src="./img/odiong.PNG" class="d-block w-100 " height ="320">
                      </div>
                      <div class="carousel-item">
                        <img src="./img/gwapo.jpg" class="d-block w-100 " height ="320">
                      </div>
                    </div>
              </div>
        </div>
        <div class="w3-container">
          <form method="post" action="update.php">
                    <h5><b>Update account</b></h5>
                    <!-- <input type="hidden" name ='userId' class="form-control"> -->
                    <div class="form-row">

                      <input type="hidden" name="userid" class="txtField" value="<?php echo $_GET['update_id']; ?>">

                      <div class="form-group col-md-6">
                          <label  class="form-label">First Name</label>
                          <input type="text" name ='fname' class="form-control" value="<?php echo $row['firstname']; ?>" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label  class="form-label">Middle Name</label>
                        <input type="text" name ='mname' class="form-control"  value="<?php echo $row['middlename']; ?>" required>
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label  class="form-label">Last Name</label>
                        <input type="text" name ='lname' class="form-control" value="<?php echo $row['lastname']; ?>" required>
                      </div>
                    <div class="form-group col-md-6">
                        <label  class="form-label">Address</label>
                        <input type="text" name ='address' class="form-control"  value="<?php echo $row['address']; ?>" required>
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label class="form-label">Gender</label>
                        <input type="text" name ='gender' class="form-control" value="<?php echo $row['gender']; ?>" required>
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

<?php include "./inc/header.php";?>

  