
<?php 
session_start();
include('includes/header.php');
include('includes/admin_navbar.php');
?>


<link rel="stylesheet" href="css/style.css">
<!---------------PAGE CONTENT BEGINS-------------------->
 <!-- Begin Page Content -->
 <div class="container-fluid">





<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <h1 class="h3 mb-0 text-gray-800"><big>ATEBUBU / AMANTIN NPP MEMBERS DASHBOARD</big></h1> -->
    <h5><big>WELOCME TO CSD1.1 RESULTS DATA-TABLE</big></h5>

    <form action="pdf_csd.php" method="POST">
       <button type="submit" name="btn_pdf" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i>Generate Report</button>
    </form>
    <!-- <a href="https://newpatrioticparty.org/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> OFFICIAL PAGE OF NPP PARTY</a> -->
</div>







<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add NDC Member Data</h5>
             <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
            <form action="u_code.php" method="POST" enctype="multipart/form-data">


              <div class="modal-body">

                <div class="form-group">
                    <label>STUDENT NAME</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Student Name" required>
                </div>

                <div class="form-group">
                    <label>STUDENT ID</label>
                    <input type="text" name="student_id" class="form-control" placeholder="Enter Student ID" required>
                </div>

                <div class="form-group">
                    <label>STUDENT PASSWORD</label>
                    <input type="password" name="student_password" class="form-control" placeholder="Enter Student Password" required>
                </div>



                    <div class="form-group">
                     <label> Upload Image  </label>
                     <input type="file" name="faculty_image" id="faculty_image" class="form-control">
                    </div>

                  

                     <!-- <input type="text" name="polling_stations" value="ALHAJI FUSEINI MOSQUE(K061703)"> -->

                     <!-- <input type="text" name="student_id" value=""> -->



                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="csd" class="btn btn-primary">Save</button>
                </div>  
            </form>
        </div>
    </div>
</div>



<div class="container-fluid">

<!----DataTales Examples-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
        </h6>
    </div>
    
<br><br><br>


    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Other Members Profile

        <form action="u_code.php" method="POST">
                <button type="submit" name="delete_multiple_csd1.1_results_table.php" class="btn btn-danger">Delete Multiple Data</button>
            </form>


            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
                  Add Student Data
            </button>
        </h6>
    </div>







        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">CSD1.1 RESTULTS DATATABLE</h6>
        </div>



        <div class="card-body">

        <div class="table-responsive">

        <?php
            $connection = mysqli_connect("localhost","root","","aiti_results");

            $query = "SELECT * FROM `csd1.1`";
            $query_run = mysqli_query($connection, $query);
            
        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Check</th>
                        <th>ID</th>
                        <th>STUDENT NAME</th>
                        <th>STUDENT ID</th>
                        <th>PASSWORD</th>
                        <th>VIEW RESULTS</th>
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
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['student_id']; ?></td>
                        <td><?php echo $row['student_password']; ?></td>
                        <td>
                            <form action="secondPage.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">VIEW RESULTS</button>
                            </form>
                            
                        </td>
        <td>

                    
            <form action="u_code.php" method="post">
                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="delete_csd_btn" class="btn btn-danger">DELETE</button>
            </form>

        </td>
    </div>

    

                        
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
 


<?php
include('includes/main_scripts.php');
include('includes/footer.php');
?>



