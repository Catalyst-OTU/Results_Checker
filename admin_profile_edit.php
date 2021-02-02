<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');

?>



 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

 


  <div class="container-fluid">

    <!----DataTales Examples-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile</h6>
        </div>
        <div class="card-body">

        <?php

         $connection = mysqli_connect("localhost","root","","aiti");
        if (isset($_POST['edit_btn']))
        {
            $id = $_POST['edit_id'];
            
            $query = "SELECT * FROM admin_profile WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);

            foreach($query_run as $row)
            {
                ?>

                <form action="code.php" method="POST">

                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >

                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" name="edit_firstname" value="<?php echo $row['firstname'] ?>" class="form-control" placeholder="Enter Firstname" required>
                </div>

                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" name="edit_lastname" value="<?php echo $row['lastname'] ?>" class="form-control" placeholder="Enter Lastname" required>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="phone" name="edit_phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Enter Phone Number" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email" required>
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select name="update_gender" class="form-control">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="edit_dob" value="<?php echo $row['dob'] ?>" class="form-control" placeholder="Enter Date of Birth" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password" required>
                </div>

                <div class="form-group">
                    <label>Usertype</label>
                    <select name="update_usertype" class="form-control">
                      <option value="user">user</option>
                      <option value="admin">admin</option>
                    </select>
                </div>


                <a href="admin_profile.php" class="btn btn-danger"> CANCEL </a>
                <button type="submit" name="register_updatebtn9" class="btn btn-primary"> UPDATE </button>

                </form>

            <?php
            }
        }
        ?>





    </div>
    </div>
</div>
</div>

        <!-- /.container-fluid -->






</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');

?>