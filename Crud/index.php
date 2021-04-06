
<?php include "./inc/header.php";?>

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
          <form action="create.php" method="post" class="form">
                    <h5><b>Create New Account</b></h5>
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
                    <input   type="submit" name="save"  class="btn btn-primary"  value="Register">
                    <br><br>
          
            </form>
        </div>
      </div><br>

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
                                              <a class="btn btn-danger" href="delete.php?del_id=<?php echo $row['id'];?>">
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

<?php include "./inc/footer.php";?>