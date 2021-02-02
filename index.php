<?php
session_start(); 
include('includes/header.php');
?>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f2335702-9774-4b1c-b0da-c92f58fbccc6";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<!-- <link rel="stylesheet" href="css/style.css"> -->

<style>
  .social-icons{
    margin: 30px auto;
    text-align: center;
}
.social-icons img{
    width: 30px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 50%;
}


.heading_5{
    font-size: 40px;
}
</style>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-12">

            <div class="p-5">
              <div class="text-center">
              <img src="images/aiti.png" alt="">
              <br><br>
                <h1 class="h4 text-gray-900 mb-4">LOGIN TO CHECK YOUR RESULTS</h1>
              </div>


              <div class="social-icons">
                    <img src="images/fb1.png">
                    <img src="images/google1.png">
                    <img src="images/twitter.jpg">
                    <!-- <img src="images/whatsapp icon.jpg"> -->
                    <!-- <img src="images/instagram2.jpeg"> -->
                </div>



              <form class="user" action="csdlogincode.php" method="POST">

            <div class="form-group">
                  <input type="text" name="student_id" class="form-control form-control-user" placeholder="Enter Student ID..." required>
                </div>
                <div class="form-group">
                  <input type="password" name="student_password" class="form-control form-control-user" placeholder="Password" required>
                </div>
                <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">Login</button>
                <hr>
                
                <!-- <p class="text-center">Register for a course? <a href="Select_Course.php">Register Now!</a></p>

                <p class="text-center">Check your Results? <a href="check_results.php">Check Now!</a></p>
                 -->
            </form>
             
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>


<?php
include('includes/main_scripts.php');
?>
