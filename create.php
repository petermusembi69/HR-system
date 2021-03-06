<?php 
session_start();
if(!isset($_SESSION["uid"]))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/main.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>


    <!--[if lt IE 10]>
    <html class="lt-ie10">
    <div style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>
<body id="page_layout" class="wide">
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div id="stuck_container" class="stuck_container">
            <div class="container-fluid">
                <div class="row row-sm-middle">
                    <div class="col-sm-5">
                        <a href="index.html" class="brand">
                            <div class="brand_name material-icons-local_florist">
                                DeKut human resource system
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-7 text-right col--offset-none">
                        <nav class="nav">
                            <ul class="sf-menu" data-type="navbar">
                                <li>
                                    <a href="adminprofile.php">adminprofile</a>
                                </li>
								<li class="active">
                                    <a href="create.php">Register</a>
                                </li>
								<li>
                                    <a href="leave.php">Leaves</a>
                                </li>
                                <li>
                                    <a href="search.php">Department</a>
                                </li>
                                <li>
                                    <a href="searchemp.php">Employee</a>
                                </li>
                                <li>
                                    <a href="logout.php">Log out</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>
	<body>
    <!--========================================================
                              CONTENT
    =========================================================-->
<main>
	<p><br/></p>
    
	<div class= "container-fluid">
	<div class='row'>
		     <div class="col-md-2"></div>
			   <div class="col-md-8" id="signup_msg"></div>
			 <div class="col-md-2"></div>
	</div>
	</div>
	<div class= "container-fluid">
	  <div class='row'>
		     <div class="col-md-1"></div>
			 <div class="col-md-1"></div>
			 <div class="col-md-8">
			  <div class="card">
			    <div class="header" style ="text-align:center;"><b style ="line-height:4em;">Employee REGISTRATION FORM</b></div>
			    <div class="card-body">
			      <form method="post">
			       <div class="row">
			         <div class="col-md-6">
			             <label for="f_name">FIRST NAME</label>
			             <input type ="text" class="form-control" id="f_name" name="f_name">
					 </div>
					  <div class="col-md-6">
			             <label for="l_name">SECOND NAME</label>
			             <input type ="text" class="form-control" id="l_name" name="l_name">
			         </div>
			     </div>
				 <div class="row">
			         <div class="col-md-12">
			             <label for="password">PASSWORD</label>
			             <input type ="password" class="form-control" id="password" name="password" placeholder="1234">
			         </div>
			     </div>
				 <div class="row">
			         <div class="col-md-12">
			             <label for="repassword">RE-ENTER PASSWORD</label>
			             <input type ="password" class="form-control" id="repassword" name="repassword">
			         </div>
				 </div>
				  <div class="row">
			         <div class="col-md-12">
			             <label for="department">DEPARTMENT</label>
			             <input type ="text" class="form-control" id="department" name="department"  placeholder="Engineering">
			         </div>
				 </div>
				 <div class="row">
			         <div class="col-md-12">
			             <label for="email">EMAIL</label>
			             <input type ="text" class="form-control" id="email" name="email" placeholder="email@gmail.com">
			         </div>
				 </div>
				 <div class="row">
			         <div class="col-md-12">
			             <label for="salary">SALARY</label>
			             <input type ="text" class="form-control" id="salary" name="salary" placeholder="100000">
			         </div>
			     </div>
				 <div class="row">
			         <div class="col-md-12">
			             <label for="number">Mobile</label>
			             <input type ="tel" class="form-control" id="mobile" name="mobile" placeholder="+254724574690">
			         </div>
			     </div>
				 <p><br/></p>
				 <div class="row">
				     <div class="col-md-12">
					     <input style="float:right;" value="SIGN UP" type ="button" id="signup_button" name="signup_button" class="btn btn-success btn_lg">
						 </div>
			 </div>
             </form>			 
		     </div>
			 <div class="card-footer bg-transparent boarder-success "  style="color:indigo;">FILL IN ALL FIELDS</div>
			 </div>
			 <div class="col-md-1"></div>
		 	 <div class="col-md-1"></div>
		 </div>
	</div>

</main>
</body>
</html>	