
<?php
session_start();


// include('security.php');
// $connection = mysqli_connect("localhost","root","","aiti_results");

$connection = mysqli_connect("sql303.unaux.com","unaux_25944248","catalyst1006","unaux_25944248_otu");



//REGISTRATION CODING FOR ATEBUBU / AMANTIN OTHERS

if (isset($_POST['csd']))
 {

  $username = $_POST['username'];
  $student_id = $_POST['student_id'];
  $student_password = $_POST['student_password'];
  $foc = $_POST['foc'];
  $html_css = $_POST['html_css'];
  $javascript = $_POST['javascript'];
  $oracle_database = $_POST['oracle_database'];
  $python = $_POST['python'];
  $se = $_POST['se'];
  $status = $_POST['status'];
  $images = $_FILES["faculty_image"]['name'];
  


//STUDENT ID VERIFICATION CODE
$studentId_Code = "SELECT * FROM `csd1.1` WHERE student_id='$student_id' ";
$studentId_Code_run = mysqli_query($connection, $studentId_Code);
if (mysqli_num_rows($studentId_Code_run) > 0) 
{
  $_SESSION['status'] = "Student ID already exist";
  $_SESSION['status_code'] = "error";
  header('Location: csd1.1_results_table.php');
}
else
{


  //  STUDENTS NAME SHOULD BE ONLY CHARACTERS OR LETTERS
if (!preg_match("/^[a-zA-Z\s]+$/", $username)) 
{
  $_SESSION['status'] = "Student Name should be only characters";
  $_SESSION['status_code'] = "error";
  header('Location: csd1.1_results_table.php');
}
else
{


  //  CHECKING FOR NUMBERS ONLY
// if (!preg_match('/^[0-9]*$/',$foc,$html_css,$javascript,$oracle_database,$python,$se)) 
//   {
//     $_SESSION['status'] = "Course module requires only numbers";
//     $_SESSION['status_code'] = "error";
//     header('Location: csd1.1_results_table.php');
//   }
// else {


  //  CHECKING THE LENGHT OF THE COURSE MODULE INPUTS IF IT IS GREATER THAN 4 NUMBERS
if (strlen($foc)>4)
{
  $_SESSION['status'] = "Course module should be only 2 or 3 numbers";
  $_SESSION['status_code'] = "error";
  header('Location: csd1.1_results_table.php');
}
else
{

  //  STATUS SHOULD BE ONLY CHARACTERS OR LETTERS
if (!preg_match("/^[a-zA-Z\s]+$/", $status)) 
{
  $_SESSION['status'] = "Status should be only characters";
  $_SESSION['status_code'] = "error";
  header('Location: csd1.1_results_table.php');
}
else
{

       
        
        
  $query = "INSERT INTO `csd1.1` (username,student_id,student_password,foc,html_css,javascript,oracle_database,python,se,status) VALUE ('$username', '$student_id', '$student_password', '$foc', '$html_css', '$javascript', '$oracle_database', '$python', '$se', '$status')";
  $query_run = mysqli_query($connection,$query);   
        
        
                if ($query_run) 
                {
                    move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]["name"]);
                    $_SESSION['success'] = "Student Profile Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: csd1.1_results_table.php');                                
                }
                else
                {
                  $_SESSION['status'] = "Profile Not Added";
                  $_SESSION['status_code'] = "error";
                  header('Location: csd1.1_results_table.php');
                }
                if ($query_run) 
                {
                  $_SESSION['status'] = "Student Profile Added Successfully";
                  $_SESSION['status_code'] = "success";
                  header('Location: csd1.1_results_table.php');                                
                }

               
}
}
}
}
}









//Update Session

if (isset($_POST['update_csd_btn']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $student_id = $_POST['edit_student_id'];
    $student_password = $_POST['edit_student_password'];
    $foc = $_POST['edit_foc'];
    $html_css = $_POST['edit_html_css'];
    $javascript = $_POST['edit_javascript'];
    $oracle_database = $_POST['edit_oracle_database'];
    $python = $_POST['edit_python'];
    $se = $_POST['edit_se'];
    $status = $_POST['update_status'];


    $query = "UPDATE `csd1.1` SET username='$username', student_id='$student_id', student_password='$student_password', foc='$foc', html_css='$html_css', javascript='$javascript', oracle_database='$oracle_database', python='$python', se='$se', status='$status' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Student profile is updated";
      $_SESSION['status_code'] = "success";
      header('Location: csd1.1_results_table.php');
    }
    else
    {
      $_SESSION['status'] = "Student profile not updated";
      $_SESSION['status_code'] = "error";
      header('Location: csd1.1_results_table.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE `csd1.1` SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_csd1.1_results_table.php'])) 
  {
   $id = "1";
   $query = "DELETE FROM `csd1.1` WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Students profile is Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: csd1.1_results_table.php');
   }
   else
   {
    $_SESSION['status'] = "Students profile not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: csd1.1_results_table.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_csd_btn'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM `csd1.1` WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Student profile is Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: csd1.1_results_table.php');
    }
    else
    {
      $_SESSION['status'] = "Student profile not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: csd1.1_results_table.php');
    } 
}
?>