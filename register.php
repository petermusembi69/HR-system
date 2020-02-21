<?php

include "db.php";
 
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword =$_POST['repassword'];
$department = $_POST['department'];
$salary =$_POST['salary'];
$mobile =$_POST['mobile'];

$name ='/^[a-zA-Z ]*$/'; 
$number ='/^[0-9]+$/';
$emailvalidation = '/^[a-z0-9-]+(\.[a-z0-9-])*@[a-z0-9-]+(\.[a-z]{2,4})$/';

if (empty($f_name) || empty($l_name) ||  empty($email) || empty($password) || empty($repassword) || empty($department) || empty($salary) || empty($mobile))
{
    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLEASE FILL ALL FIELDS ...!</b>
    </div>
    ";
    exit();

}

{
  if(!preg_match($name,$f_name)){

    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please enter a valid first name...!</b>
    </div>
    ";
    exit();
  }
  if(!preg_match($name,$l_name)){

    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please enter a valid second name...!</b>
    </div>
    ";
    exit();
  }
 
  if(!preg_match($name,$department)){

    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please enter a valid department name...!</b>
    </div>
    ";
    exit();
  }
  if((strlen($password)>4) || (strlen($password)<4)){

    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password require four values...!</b>
    </div>
    ";
    exit();
  }
  if($password!=$repassword){

    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password does not match ...!</b>
    </div>
    ";
    exit();
  } if(!preg_match($emailvalidation,$email)){

    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b> Please enter a valid email address..!</b>
    </div>
    ";
    exit();
  }
  if(!preg_match($number,$salary)){

    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Salary characters are invalid...!</b>
    </div>
    ";
    exit();
  }


  if(isset($_POST["f_name"])&&isset($_POST["l_name"])&&isset($_POST["password"])&&isset($_POST["repassword"])&&
  isset($_POST["mobile"])&&isset($_POST["department"])&&isset($_POST["email"])&&isset($_POST["salary"])){
   
    $sql="SELECT * FROM departments WHERE department_name='$department'";
    $run_query = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($run_query);
    $d_id =$row["department_id"];

    $sql ="INSERT INTO `employees`(`employee_id`, `department_id`, `employee_name`, `phone_number`,
     `salary`, `password`, `email`, `first_name`, `last_name`) VALUES 
    (NULL, '$d_id', '$f_name', '$mobile', '$salary', MD5('$password'),  '$email', '$f_name','$l_name')";
    $run_query=mysqli_query($con,$sql);
      if($run_query)
      {
        echo"
         <div class='alert alert-warning'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>EMPLOYEE REGISTERED SUCCESSFULLY...!</b>
         </div>
    ";
      }
      else{
        echo"
        <div class='alert alert-warning'>
           <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>EMPLOYEE ALREADY EXIST...!</b>
        </div>
   ";
      }
    
  }
}

?>