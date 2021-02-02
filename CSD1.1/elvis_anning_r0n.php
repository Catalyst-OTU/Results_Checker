
<?php 
session_start();
include('includes/header.php');
include('includes/student_navbar.php');
?>


<link rel="stylesheet" href="css/style.css">
<!---------------PAGE CONTENT BEGINS-------------------->
 <!-- Begin Page Content -->
 <div class="container-fluid">



 <button class="btn btn-primary text-light btn-outline-success"  data-toggle="collapse" data-target="#coll">Click me to show you your Results</button>

    <br><br>

    <div id="coll" class="collapse">

 
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">WELCOME ELVIS ANNING <br>THIS IS YOUR RESULTS</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="#" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>MODULE</th>
                      <th>SCORE</th>
                      <th>GRADE</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <tr>
                     
                      <td class="m-0 font-weight-bold text-primary">FOC</td>
                      <td>75%</td>
                      <td>B+</td>
                      
                      
                    </tr>
                    <tr>
                      
                      <td class="m-0 font-weight-bold text-primary">HTML & CSS</td>
                      <td>88%</td>
                      <td>A+</td>
                      
                      
                    </tr>
                    <tr>
                      
                      <td class="m-0 font-weight-bold text-primary">JAVASCRIPT</td>
                      <td>80%</td>
                      <td>A</td>
                     
                      
                    </tr>
                    <tr>
                     
                      <td class="m-0 font-weight-bold text-primary">DATABASE</td>
                      <td>70%</td>
                      <td>A</td>
                     
                      
                    </tr>
                    <tr>
                    
                      <td class="m-0 font-weight-bold text-primary">PYTHON</td>
                      <td>70%</td>
                      <td>A</td>
                      
                      
                    </tr>
                    <tr>
                     
                      <td class="m-0 font-weight-bold text-primary">SOFTWARE ENGINEERING</td>
                      <td>80%</td>
                      <td>A+</td>
                    </tr>           
                  </tbody>
                  
                </table>
                <div class="card-footer py-3">
                  <h6 class="m-0 font-weight-bold text-primary text-center">STATUS OF RESULTS</h6>
                  <h6 class="m-0 font-weight-bold text-success text-center">PASS</h6>

                </div>
              </div>
            </div>
          </div>

    </div>
        </div>
        <!-- /.container-fluid -->

      <!-- </div> -->
      <!-- End of Main Content -->





<?php
include('includes/main_scripts.php');
include('includes/footer.php');
?>



