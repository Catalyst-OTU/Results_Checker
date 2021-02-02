<?php 
session_start();
include('includes/header.php');
include('includes/main_navbar.php');

?>



 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  


  <div class="container-fluid">

    <!----DataTales Examples-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Edit Atebubu / Amantin Constituency Data</h4>
        </div>
        <div class="card-body">

        <?php

                $connection = mysqli_connect("localhost","root","","bonoeast_region");
                if (isset($_POST['edit_btn']))
           {
                $id = $_POST['edit_id'];
            
                $query = "SELECT * FROM atebubu_amantin WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
            {
        ?>


<form action="try.php" method="POST">

<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >

<div class="form-group">
    <label>Polling Station Code</label>
    <input type="text" name="edit_polling_station_code" value="<?php echo $row['polling_station_code'] ?>" class="form-control" placeholder="Enter Polling Station Code" required>
</div>

<div class="form-group">
    <label>Polling Station Name</label>
    <input type="text" name="edit_polling_station_name" value="<?php echo $row['polling_station_name'] ?>" class="form-control" placeholder="Enter Polling Station Name" required>
</div>

<div class="form-group">
    <label>Register 2019</label>
    <input type="phone" name="edit_register_2019" value="<?php echo $row['register_2019'] ?>" class="form-control" placeholder="Enter Register 2019" required>
</div>

<div class="form-group">
    <label>Registered Total</label>
    <input type="phone" name="edit_registered_total" value="<?php echo $row['registered_total'] ?>" class="form-control" placeholder="Enter Registered Total" required>
</div>

<div class="form-group">
    <label>Percentage Change</label>
    <input type="phone" name="edit_percentage_change" value="<?php echo $row['percentage_change'] ?>" class="form-control" placeholder="Enter Percentage Change" required>
</div>




<a href="atebubu_amantin.php" class="btn btn-danger"> CANCEL </a>
<button type="submit" name="register_updatebtn_atebubu/amantin" class="btn btn-primary"> UPDATE </button>

</form>

            <?php
                }
                }
            ?>





</div>
</div>
</div>
</div>
</div>
</div>


<?php
include('includes/main_scripts.php');
include('includes/footer.php');
?>