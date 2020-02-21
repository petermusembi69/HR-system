<?php

include "db.php";

session_start();

$days = $_POST['days'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$email =$_POST['email'];
$month =$_POST['month'];
$department = $_POST['department'];

$name ='/^[a-zA-Z ]*$/'; 
$number ='/^[0-9]+$/';
$emailvalidation = '/^[a-z0-9-]+(\.[a-z0-9-])*@[a-z0-9-]+(\.[a-z]{2,4})$/';

if (empty($start_date) ||  empty($email) || empty($end_date) || empty($month) || empty($department))
{
    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLEASE FILL ALL FIELDS ...!</b>
    </div>
    ";
    exit();

}

{

  if(!preg_match($name,$department)){

    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please enter a valid department name...!</b>
    </div>
    ";
    exit();
  }
  } if(!preg_match($emailvalidation,$email)){

    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Please enter a valid email address..!</b>
    </div>
    ";
    exit();
  }

  if(isset($_POST["email"])&&isset($_POST["start_date"])&&isset($_POST["end_date"])&&isset($_POST["month"])&&
  isset($_POST["department"])&&isset($_POST["email"])){
   
    $sql="SELECT * FROM employees WHERE email='$email'";
    $run_query = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($run_query);
    $em_id =$row["employee_id"];
    
    $date1 = new DateTime($start_date);
    $date2 = new DateTime($end_date);
    $datediff = date_diff($date1,$date2);
    $dayss = $datediff->format("%d");
    $dayss = $dayss + 27;

    $sql ="INSERT INTO `leaves`(`leaves_id`, `employee_id`,
     `leave_days`, `leave_month`, `start_date`, `end_date`) VALUES
    (NULL, '$em_id', '$dayss', '$month', '$start_date', '$end_date')";
    $run_query=mysqli_query($con,$sql);
      if($run_query)
      {
        echo"
         <div class='alert alert-warning'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>$dayss days Leave assigned SUCCESSFULLY...!</b>
         </div>
    ";
      }
      else{
        echo"
        <div class='alert alert-warning'>
           <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> $dayss EMPLOYEE LEAVE ALREADY EXIST...!</b>
        </div>
   ";
      }
    
  }


?>