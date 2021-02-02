<?php
session_start();

include('includes/header.php');
include('includes/admin_navbar.php');
?>




  <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
             <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
            <form action="code.php" method="POST" enctype="multipart/form-data">


              <div class="modal-body">

                <div class="form-group">
                    <label>FirstName</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname" required>
                </div>

                <div class="form-group">
                    <label>LastName</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname" required>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="phone" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email" required>
                    <small class="error_email" style="color: red;"></small>
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" class="form-control" placeholder="Enter Date of Birth" required>
                </div>
               
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
                </div>

                <div class="form-group">
                     <label> Upload Image  </label>
                     <input type="file" name="faculty_image" id="faculty_image" class="form-control" required>
                     </div>

                  

                     <input type="hidden" name="gender" value="male">

                     <input type="hidden" name="usertype" value="admin">



              </div>

              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="registerbtn9" class="btn btn-primary">Save</button>
              </div>  
            </form>
        </div>
    </div>
</div>




<div class="container-fluid">

    <!----DataTales Examples-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ADMIN PROFILE

            <form action="code.php" method="POST">
                    <button type="submit" name="delete_multiple_register_data9" class="btn btn-danger">Delete Multiple Data</button>
                </form>


                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
                    Add Admin Profile
                </button>
            </h6>
        </div>


         <!-- DataTales Example -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ADMIN PROFILE</h6>
            </div>

        <div class="card-body">

      

            <div class="table-responsive">

            <?php
                $connection = mysqli_connect("localhost","root","","aiti");

                $query = "SELECT * FROM admin_profile";
                $query_run = mysqli_query($connection, $query);
                
            ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Check</th>
                            <th>ID</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Password</th>
                            <th>UserType</th>
                            <th>Image</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                    if (mysqli_num_rows($query_run) > 0)
                     {
                        while ($row = mysqli_fetch_assoc($query_run))
                         {
                    ?>
                          
                        <tr>
                            <td>
                                <input type="checkbox" onclick="toggleCheckbox(this)" value="<?php echo $row['id'] ?>" <?php echo $row['visible'] == 1 ? "checked" : "" ?> >
                            </td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['usertype']; ?></td>
                            <td><?php echo '<img src="upload/'.$row['images'].'" width="100px;" height="100px;" alt="Image">'?></td>
                            <td>
                                <form action="admin_profile_edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                </form>
                                
                            </td>
                            <td>

                                <form action="code.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delete_btn9" class="btn btn-danger">DELETE</button>
                                </form>
                            </td>

                            
                        </tr>

                        <?php
                        }

                     }
                     else
                     {
                         echo "No Record Found";
                     }

                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</div>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
