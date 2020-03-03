<?php

include "db.php";

session_start();

$email = $_POST['exampleInputEmail1'];
$offend = $_POST['exampleOffend'];
$subject = $_POST['exampleSubject'];
$description =$_POST['exampleDescription'];
$uid =$_SESSION['uid'];

if (empty($email) ||  empty($offend) || empty($subject) || empty($description))
{
    echo"
    <div class='alert alert-warning'>
         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>$uid PLEASE FILL ALL FIELDS ...!</b>
    </div>
    ";
    exit();

}
else{
    $sql = "INSERT INTO `complaints`
     (`complaint_id`, `employee_id`, `complainant_email`, `offender email`,
      `complain_subj`, `complain_desc`, `date_created`, `date_solved`)
     VALUES (NULL, '$uid', '$email', '$offend', '$subject', '$description', 'CURRENT_TIMESTAMP',NULL)";
    $run_query=mysqli_query($con,$sql);
        if($run_query)
        {
           echo"
            <div class='alert alert-warning'>
               <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Complain sent SUCCESSFULLY...!</b>
            </div>
       ";
         }
         else{
             echo"
             $sql
             <div class='alert alert-warning'>
               <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Wrong details...!</b>
            </div>
             ";
         }
}

?>