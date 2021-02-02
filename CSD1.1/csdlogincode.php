<?php

session_start();


// $connection = mysqli_connect("localhost","root","","aiti_results");

$connection = mysqli_connect("sql303.unaux.com","unaux_25944248","catalyst1006","unaux_25944248_otu");






if (isset($_POST['login_btn'])) 
{
    $student_id = $_POST['student_id'];
    $student_password = $_POST['student_password'];



//     if (!$_SESSION['student_id']) 
// {
//     $_SESSION['status'] = "Please Login before";
//     $_SESSION['status_code'] = "warning";
//     header('Location: index.php');
// }

    // ADMIN AND STUDENTS LOGIN CODE

    $query = "SELECT * FROM `csd1.1` WHERE student_id='$student_id' AND student_password='$student_password' ";
    $query_run = mysqli_query($connection, $query);
    $studentId_type = mysqli_fetch_array($query_run);

    if($studentId_type['student_id'] == "admin") 
    {
        $_SESSION['student_id'] = $student_id;
        header('Location: aitiAdmin_f7f.php');
    }

    else if($studentId_type['student_id'] == "2020CSD1.1M087")
    {
        $_SESSION['student_id'] = $student_id;
        header('Location: bismark_otu_v6f.php');
    }

    else if($studentId_type['student_id'] == "2020CSD1.1M019")
    {
        $_SESSION['student_id'] = $student_id;
        header('Location: elvis_anning_r0n.php');
    }

    else if($studentId_type['student_id'] == "2020CSD1.1M011")
    {
        $_SESSION['student_id'] = $student_id;
        header('Location: kelvin_agyapon_d9d.php');
    }

    else if($studentId_type['student_id'] == "2020CSD1.1M020")
    {
        $_SESSION['student_id'] = $student_id;
        header('Location: richard_asante_s6i.php');
    }

    else if($studentId_type['student_id'] == "2020CSD1.1M015")
    {
        $_SESSION['student_id'] = $student_id;
        header('Location: oscar_opoku_a5l.php');
    }


    else
    {
        $_SESSION['status'] = "Your Student ID and Password is Incorrect! Please try again";
        $_SESSION['status_code'] = "warning";
        header('Location: index.php');  
    }







}



?>