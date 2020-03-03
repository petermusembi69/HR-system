<?php

include "db.php";

session_start();

if(isset($_POST["search"])){
$keywo=$_POST["userKeyword"];
$sql="SELECT * from employees
    INNER JOIN departments  ON
    employees.department_id=departments.department_id
    where departments.department_name='$keywo'";
    $run_query = mysqli_query($con,$sql);
    $count=mysqli_num_rows($run_query);
    if($count>0){
        echo"
        <p>$count employees retrieved</p>
        ";
     while($row =mysqli_fetch_array($run_query)){
        $deparment = $row["department_name"];
        $e_id = $row["employee_id"];
        $f_name = $row["first_name"];
        $l_name = $row["last_name"];
        $email = $row["email"];
        $mobile = $row["phone_number"];
    
        echo"
        <div class='container_fluid'>
        <div class='row'>
            <div class='col-md-3'><input type='text' class='form-control'  value='$deparment' disabled></div>
            <div class='col-md-2'><input type='text' class='form-control' value='$f_name ' disabled></div>
            <div class='col-md-2'><input type='text' class='form-control' value='$l_name ' disabled></div>
            <div class='col-md-3'><input type='text' class='form-control' value='$email' disabled></div>
            <div class='col-md-2'><input type='text' class='form-control' value='$mobile' disabled></div>
            
        </div>

        </div>
        <p><br/></p>

        ";
    }
}
}
if(isset($_POST["empSearch"])){
    $keyword=$_POST["empKey"];
    $sql="SELECT * from employees
        INNER JOIN departments  ON
        employees.department_id=departments.department_id
        where employees.email='$keyword'";
        $run_query = mysqli_query($con,$sql);
        $count=mysqli_num_rows($run_query);
        if($count==1){
         while($row =mysqli_fetch_array($run_query)){
            $deparment = $row["department_name"];
            $e_id = $row["employee_id"];
            $f_name = $row["first_name"];
            $l_name = $row["last_name"];
            $email = $row["email"];
            $mobile = $row["phone_number"];
            $salary = $row["salary"];
        
            echo"
            <div class='container_fluid'>
            <div class='row'>
                <div class='col-md-4'><input type='text' class='form-control'  value='$mobile' disabled></div>
                <div class='col-md-4'><input type='text' class='form-control' value='$f_name ' disabled></div>
                <div class='col-md-4'><input type='text' class='form-control' value='$l_name ' disabled></div>
                
                
            </div>
    
            </div>
            <p><br/></p>
            <div class='container_fluid'>
            <div class='row'>
                <div class='col-md-4'><label>departmet</label><input type='text' class='form-control'  value='$deparment' disabled></div>
                <div class='col-md-4'><label>email</label><input type='text' class='form-control' value='$email' disabled></div>
                <div class='col-md-4'><label>salary</label><input type='text' class='form-control' value='$salary' disabled></div>
            </div>
    
            </div>
            <p><br/></p>
            <div class='container_fluid'>
            <div class='row'>
            <div class='col-md-4'></div>
            <div class='col-md-4'>
                <div class='btn-group'>
                    <a href='#' remove_id='$e_id' class='btn btn-danger remove'>Delete</a>
                </div>
            </div>
            <div class='col-md-4'></div>
            </div>
            </div>
            <p><br/></p>
    
            ";
        }
    }
    else{
        echo
        "
        <div class='alert alert-danger'>
            <a href ='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Employee does not exist...!</b>
        </div>
    ";
    }
    }

    if(isset($_POST["removeEmp"])){
		$pid = $_POST["removeId"];
		$sql ="DELETE FROM `employees` WHERE employee_id ='$pid'";
		$run_query = mysqli_query($con,$sql);
		if($run_query){
			echo "
			<div class='alert alert-danger'>
                 <a href ='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Employee Removed Successfully...!</b>
            </div>
			";
        }	
    }
    if(isset($_POST["leaveCheck"])) {
        $uid=$_SESSION['uid'];
        $sql = "SELECT * FROM `leaves` WHERE employee_id = '$uid'";
        $run_query = mysqli_query($con,$sql);
        $count = mysqli_num_rows($run_query);
        if($count >= 1) {
            while($row = mysqli_fetch_array($run_query)){
                $days =$row["leave_days"];
                $leave_month=$row["leave_month"];
                $s_date =$row["start_date"];
                $e_date =$row["end_date"];
                echo "
                <div class='container_fluid'>
                   <div class='row'>
                       <div class='col-md-3'><input type='text' class='form-control' value='$s_date' disabled></div>
                       <div class='col-md-3'><input type='text' class='form-control' value='$e_date' disabled></div>
                       <div class='col-md-3'><input type='text' class='form-control'  value='$days' disabled></div>
                       <div class='col-md-3'><input type='text' class='form-control' value='$leave_month' disabled></div>
                   </div>
                </div>
            ";
            }
           
        }
        else {
            echo "
            <div class='alert alert-danger'>
               <a href ='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Leave not assigned...!</b>
            </div>
            "; 
        }

    }
?>