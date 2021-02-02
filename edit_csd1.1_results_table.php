<?php 
session_start();
include('includes/header.php');
include('includes/admin_navbar.php');

?>



 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  


  <div class="container-fluid">

    <!----DataTales Examples-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">EDIT STUDENT PROFILE</h6>
        </div>
        <div class="card-body">

        <?php

                // $connection = mysqli_connect("localhost","root","","aiti_results");
                $connection = mysqli_connect("sql303.unaux.com","unaux_25944248","catalyst1006","unaux_25944248_otu");

                if (isset($_POST['edit_btn']))
           {
                $id = $_POST['edit_id'];
            
                $query = "SELECT * FROM `csd1.1` WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
            {
        ?>


<form action="u_code.php" method="POST">

<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >

<div class="form-group">
    <label>STUDENT NAME</label>
    <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username" required>
</div>

<div class="form-group">
    <label>STUDENT ID</label>
    <input type="text" name="edit_student_id" value="<?php echo $row['student_id'] ?>" class="form-control" placeholder="Enter Student id" required>
</div>

<div class="form-group">
    <label>STUDENT PASSWORD</label>
    <input type="text" name="edit_student_password" value="<?php echo $row['student_password'] ?>" class="form-control" placeholder="Enter Student Password" required>
</div>


<div class="form-group">
    <label>FUNDAMENTALS OF COMPUTING</label>
    <input type="text" name="edit_foc" value="<?php echo $row['foc'] ?>" class="form-control" placeholder="FUNDAMENTALS OF COMPUTING" required>
</div>


<div class="form-group">
    <label>HTML & CSS</label>
    <input type="text" name="edit_html_css" value="<?php echo $row['html_css'] ?>" class="form-control" placeholder="HTML & CSS" required>
</div>

<div class="form-group">
    <label>JAVASCRIPT</label>
    <input type="text" name="edit_javascript" value="<?php echo $row['javascript'] ?>" class="form-control" placeholder="JAVASCRIPT" required>
</div>

<div class="form-group">
    <label>DATABASE</label>
    <input type="text" name="edit_oracle_database" value="<?php echo $row['oracle_database'] ?>" class="form-control" placeholder="DATABASE" required>
</div>

<div class="form-group">
    <label>PYTHON</label>
    <input type="text" name="edit_python" value="<?php echo $row['python'] ?>" class="form-control" placeholder="PYTHON" required>
</div>

<div class="form-group">
    <label>SOFTWARE ENGINEERING</label>
    <input type="text" name="edit_se" value="<?php echo $row['se'] ?>" class="form-control" placeholder="SOFTWARE ENGINEERING" required>
</div>

<div class="form-group">
    <label>STATUS</label>
    <select name="update_status" class="form-control">
        <option value="PASS">PASS</option>
        <option value="FAIL">FAIL</option>
    </select>
</div>




<a href="csd1.1_results_table.php" class="btn btn-danger"> CANCEL </a>
<button type="submit" name="update_csd_btn" class="btn btn-primary">UPDATE RESULTS</button>

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
include('includes/scripts.php');
include('includes/footer.php');
?>